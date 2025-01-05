<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'service_bpjs/m_service_bpjs',
    ));

    $this->menu_id = '05.03';
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
    $this->render('approval_penjaminan_sep/index', $data);
  }

  function process()
  {
    $data = $this->input->post(null, true);
    // request
    $request = array(
      'request' =>
      array(
        't_sep' =>
        array(
          'noKartu' => $data['noKartu'],
          'tglSep' => $data['tglSep'],
          'ppkPelayanan' => $data['ppkPelayanan'],
          'jnsPelayanan' => $data['jnsPelayanan'],
          'klsRawat' => $data['klsRawat'],
          'noMR' => $data['noMR'],
          'rujukan' =>
          array(
            'asalRujukan' => $data['asalRujukan'],
            'tglRujukan' => $data['tglRujukan'],
            'noRujukan' => $data['noRujukan'],
            'ppkRujukan' => $data['ppkRujukan'],
          ),
          'catatan' => $data['catatan'],
          'diagAwal' => $data['diagAwal'],
          'poli' =>
          array(
            'tujuan' => $data['tujuan'],
            'eksekutif' => $data['eksekutif'],
          ),
          'cob' =>
          array(
            'cob' => $data['cob'],
          ),
          'katarak' =>
          array(
            'katarak' => $data['katarak'],
          ),
          'jaminan' =>
          array(
            'lakaLantas' => $data['lakaLantas'],
            'penjamin' =>
            array(
              'penjamin' => $data['penjamin'],
              'tglKejadian' => $data['tglKejadian'],
              'keterangan' => $data['keterangan'],
              'suplesi' =>
              array(
                'suplesi' => $data['suplesi'],
                'noSepSuplesi' => $data['noSepSuplesi'],
                'lokasiLaka' =>
                array(
                  'kdPropinsi' => $data['kdPropinsi'],
                  'kdKabupaten' => $data['kdKabupaten'],
                  'kdKecamatan' => $data['kdKecamatan'],
                ),
              ),
            ),
          ),
          'skdp' =>
          array(
            'noSurat' => $data['noSurat'],
            'kodeDPJP' => $data['kodeDPJP'],
          ),
          'noTelp' => $data['noTelp'],
          'user' => $data['user'],
        ),
      ),
    );
    //
    // $json = file_get_contents(FCPATH . "request.json");
    // $obj  = json_decode($json, true);
    //
    $service_bpjs = $this->m_service_bpjs->get_first();
    $vclaim_conf = [
      'cons_id' => $service_bpjs['cons_id'],
      'secret_key' => $service_bpjs['secret_key'],
      'base_url' => $service_bpjs['base_url'],
      'service_name' => $service_bpjs['service_name'],
'user_key' => $service_bpjs['user_key'],
    ];

    $peserta = new Nsulistiyawan\Bpjs\VClaim\Sep($vclaim_conf);
    $result = $peserta->insertSEP($request);

    echo json_encode($result, JSON_PRETTY_PRINT);
  }
}
