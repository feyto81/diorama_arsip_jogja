<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'm_berita'
    ));

    $this->menu_id = '03';
    $this->menu = $this->m_config->get_menu($this->menu_id);
    if ($this->menu == null) redirect(site_url() . '/error/error_403');

    //cookie 
    $this->cookie = get_cookie_menu($this->menu_id);
    if ($this->cookie['search'] == null) $this->cookie['search'] = array('term' => '');
    if ($this->cookie['order'] == null) $this->cookie['order'] = array('field' => 'berita_title', 'type' => 'asc');
    if ($this->cookie['per_page'] == null) $this->cookie['per_page'] = 10;
    if ($this->cookie['cur_page'] == null) 0;
  }

  public function index()
  {
    authorize($this->menu, '_read');
    //cookie
    $this->cookie['cur_page'] = $this->uri->segment(3, 0);
    $this->cookie['total_rows'] = $this->m_berita->all_rows($this->cookie);
    set_cookie_menu($this->menu_id, $this->cookie);
    //main data
    $data['menu'] = $this->menu;
    $data['cookie'] = $this->cookie;
    $data['main'] = $this->m_berita->list_data($this->cookie);
    $data['pagination_info'] = pagination_info(count($data['main']), $this->cookie);
    //set pagination
    set_pagination($this->menu, $this->cookie);
    //render
    $this->render('index', $data);
  }

  public function form($id = null)
  {
    ($id == null) ? authorize($this->menu, '_create') : authorize($this->menu, '_update');
    if ($id == null) {
      create_log('fb49e2c1-a762-4a34-8e2c-c8fab48814f4', $this->menu['menu_name']);
      $data['main'] = null;
    } else {
      create_log('ea565e8b-ef41-4ff6-a254-e9a682e278bc', $this->menu['menu_name']);
      $data['main'] = $this->m_berita->by_field('berita_id', $id);
    }
    $data['id'] = $id;
    $data['menu'] = $this->menu;
    $this->render('form', $data);
  }

  public function save($id = null)
  {
    ($id == null) ? authorize($this->menu, '_create') : authorize($this->menu, '_update');
    html_escape($data = $this->input->post(null, true));
    unset($data['files'], $data['old_berita_image']);
    if (!isset($data['active_st'])) {
      $data['active_st'] = 0;
    }
    $data['berita_image'] = $this->_uploadImage();
    $data['berita_date'] = to_date($data['berita_date'], '', 'full_date');
    if ($id == null) {
      $cek = $this->m_berita->by_field('berita_title', $data['berita_title']);
      if ($cek != null) {
        $this->session->set_flashdata('flash_error', 'Nama sudah ada di sistem.');
        redirect(site_url() . '/' .  $this->menu['controller']  . '/form/');
      }
      $data['berita_id'] = $this->uuid->v4();
      $this->m_berita->save($data, $id);
      create_log('fb49e2c1-a762-4a34-8e2c-c8fab48814f4', $this->menu['menu_name']);
      $this->session->set_flashdata('flash_success', 'Data berhasil ditambahkan.');
    } else {
      if ($data['old'] != $data['berita_id'] && $cek != null) {
        $this->session->set_flashdata('flash_error', 'Nama sudah ada di sistem.');
        redirect(site_url() . '/' . $this->menu['controller'] . '/form/' . $id);
      }
      unset($data['old']);
      $this->m_berita->save($data, $id);
      create_log('ea565e8b-ef41-4ff6-a254-e9a682e278bc', $this->menu['menu_name']);
      $this->session->set_flashdata('flash_success', 'Data berhasil diubah.');
    }
    redirect(site_url() . '/' . $this->menu['controller'] . '/' . $this->menu['url'] . '/' . $this->cookie['cur_page']);
  }

  public function delete($id = null)
  {
    ($id == null) ? authorize($this->menu, '_create') : authorize($this->menu, '_update');
    $this->m_berita->delete($id);
    create_log('d6d0ec35-3952-4f22-a7dd-609aea350a41', $this->menu['menu_name']);
    $this->session->set_flashdata('flash_success', 'Data berhasil dihapus.');
    redirect(site_url() . '/' . $this->menu['controller'] . '/' . $this->menu['url'] . '/' . $this->cookie['cur_page']);
  }

  private function _uploadImage()
  {
    $config['upload_path']          = FCPATH . '/images/berita/';
    $config['allowed_types']        = '*';
    $config['encrypt_name']         = true;
    $config['overwrite']            = true;
    $config['max_size']             = 2048;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('berita_image')) {
      return $this->upload->data("file_name");
    } else {
      var_dump($this->upload->display_errors());
      die();
    }

    return "no-photo.png";
  }

  public function ajax($type = null, $id = null)
  {
    if ($type == 'check_id') {
      $data = $this->input->post();
      $cek = $this->m_berita->by_field('berita_title', $data['berita_title']);
      $old = $this->m_berita->by_field('berita_id', $id);
      if ($id == null) {
        echo ($cek != null) ? 'false' : 'true';
      } else {
        echo ($cek != null) ? (($cek['berita_title'] == $old['berita_title']) ? 'true' : 'false') : 'true';
      }
    }
  }
}
