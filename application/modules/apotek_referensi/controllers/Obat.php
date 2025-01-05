<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'service_bpjs/m_service_bpjs',
    ));

    $this->menu_id = '32.06';
    $this->menu = $this->m_config->get_menu($this->menu_id);
    if ($this->menu == null) redirect(site_url() . '/error/error_403');

    //cookie 
    $this->cookie = get_cookie_menu($this->menu_id);
    if ($this->cookie['search'] == null) $this->cookie['search'] = array('term' => '');
    if ($this->cookie['order'] == null) $this->cookie['order'] = array('field' => 'app_name', 'type' => 'asc');
    if ($this->cookie['per_page'] == null) $this->cookie['per_page'] = 10;
    if ($this->cookie['cur_page'] == null) 0;
  }

  public function index()
  {
    authorize($this->menu, '_read');
    set_cookie_menu($this->menu_id, $this->cookie);
    $data['menu'] = $this->menu;
    $this->render('obat/index', $data);
  }

  function process()
  {
    //
    $service_bpjs = $this->m_service_bpjs->get_first();
    $vclaim_conf = [
      'cons_id' => $service_bpjs['cons_id_apotek'],
      'secret_key' => $service_bpjs['secret_key_apotek'],
      'base_url' => $service_bpjs['base_url_apotek'],
      'service_name' => $service_bpjs['service_name_apotek'],
      'user_key' => $service_bpjs['user_key_apotek'],
    ];

    $peserta = new Nsulistiyawan\Bpjs\Apotek\Referensi($vclaim_conf);
    $result = $peserta->obat($this->input->post('kdJenisObat', true), $this->input->post('tglResep', true), $this->input->post('keyword', true));

    echo json_encode($result, JSON_PRETTY_PRINT);
  }
}
