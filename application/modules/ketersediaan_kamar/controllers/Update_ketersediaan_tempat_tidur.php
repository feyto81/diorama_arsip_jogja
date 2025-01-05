<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_ketersediaan_tempat_tidur extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'service_bpjs/m_service_bpjs',
    ));

    $this->menu_id = '30.02';
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
    $this->render('update_ketersediaan_tempat_tidur/index', $data);
  }

  function process()
  {
    $data = $this->input->post(null, true);
    $kode_ppk = $data['kode_ppk'];
    // request
    $request = array(
      'kodekelas' => $data['kodekelas'],
      'koderuang' => $data['koderuang'],
      'namaruang' => $data['namaruang'],
      'kapasitas' => $data['kapasitas'],
      'tersedia' => $data['tersedia'],
      'tersediapria' => $data['tersediapria'],
      'tersediawanita' => $data['tersediawanita'],
      'tersediapriawanita' => $data['tersediapriawanita'],
    );
    //
    $service_bpjs = $this->m_service_bpjs->get_first();
    $vclaim_conf = [
      'cons_id' => $service_bpjs['cons_id'],
      'secret_key' => $service_bpjs['secret_key'],
      'base_url' => $service_bpjs['base_url'],
      'service_name' => $service_bpjs['service_name'],
      'user_key' => $service_bpjs['user_key'],
    ];

    $peserta = new Nsulistiyawan\Bpjs\Aplicare\KetersediaanKamar($vclaim_conf);
    $result = $peserta->bedUpdate($kode_ppk, $request);

    echo json_encode($result, JSON_PRETTY_PRINT);
  }
}
