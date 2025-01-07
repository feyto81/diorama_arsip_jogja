<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'm_sejarah'
    ));

    $this->menu_id = '05';
    $this->menu = $this->m_config->get_menu($this->menu_id);
    if ($this->menu == null) redirect(site_url() . '/error/error_403');

    //cookie 
    $this->cookie = get_cookie_menu($this->menu_id);
    if ($this->cookie['search'] == null) $this->cookie['search'] = array(
      'term' => ''
    );
    if ($this->cookie['order'] == null) $this->cookie['order'] = array();
    if ($this->cookie['per_page'] == null) $this->cookie['per_page'] = 10;
    if ($this->cookie['cur_page'] == null) 0;
  }


  public function form($id = null)
  {
    ($id == null) ? authorize($this->menu, '_create') : authorize($this->menu, '_update');
    $data['main'] = $this->m_sejarah->get_first();
    $data['id'] = $id;
    $data['menu'] = $this->menu;
    $this->render('form', $data);
  }

  public function save($id = null)
  {
    ($id == null) ? authorize($this->menu, '_create') : authorize($this->menu, '_update');
    html_escape($data = $this->input->post(null, true));
    if (!empty($_FILES["image_thumbnail"]["name"])) {
      $data['image_thumbnail'] = $this->_uploadImage(@$data['old_image_thumbnail']);
    } else {
      $data['image_thumbnail'] = $data['old_image_thumbnail'];
    }
    unset($data['old_image_thumbnail']);
    $this->m_sejarah->save($data, $id);
    create_log('ea565e8b-ef41-4ff6-a254-e9a682e278bc', $this->menu['menu_name']);
    $this->session->set_flashdata('flash_success', 'Data berhasil diubah.');
    redirect(site_url() . '/' . $this->menu['controller'] . '/' . $this->menu['url'] . '/' . $this->cookie['cur_page']);
  }

  private function _uploadImage($old_images = null)
  {
    $config['upload_path']          = FCPATH . '/images/sejarah/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|svg';
    $config['encrypt_name']         = true;
    $config['overwrite']            = true;
    $config['max_size']             = 2048;

    // dd($_POST);die;  
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image_thumbnail')) {
      if (@$old_images != '' || @$old_images != null) {
        $url_gambar_lama = FCPATH . '/images/sejarah/'.@$old_images;
        unlink(@$url_gambar_lama);
      }
      return $this->upload->data("file_name");
    } else {
      var_dump($this->upload->display_errors());
      die();
    }

    return "logo.png";
  }
}
