<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert_lpk extends MY_Controller
{

  var $menu_id, $menu, $cookie;

  function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'config/m_config',
      'service_bpjs/m_service_bpjs',
    ));

    $this->menu_id = '07';
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
    $this->render('lembar_pengajuan_klaim/insert_lpk/index', $data);
  }

  public function ajax($id = null)
  {
    if ($id == 'add_diagnosa') {
      $data['diagnosa_no'] = html_escape($this->input->post('diagnosa_no')) + 1;
      //			
      echo json_encode(array(
        'html' => $this->load->view('lembar_pengajuan_klaim/insert_lpk/add_diagnosa', $data, true),
        'diagnosa_no' => $data['diagnosa_no'],
      ));
    }

    if ($id == 'add_procedure') {
      $data['procedure_no'] = html_escape($this->input->post('procedure_no')) + 1;
      //			
      echo json_encode(array(
        'html' => $this->load->view('lembar_pengajuan_klaim/insert_lpk/add_procedure', $data, true),
        'procedure_no' => $data['procedure_no'],
      ));
    }
  }

  function process()
  {
    $data = $this->input->post(null, true);
    // request
    $request = array(
      'request' =>
      array(
        't_lpk' =>
        array(
          'noSep' => $data['noSep'],
          'tglMasuk' => $data['tglMasuk'],
          'tglKeluar' => $data['tglKeluar'],
          'jaminan' => $data['jaminan'],
          'poli' =>
          array(
            'poli' => $data['poli'],
          ),
          'perawatan' =>
          array(
            'ruangRawat' => $data['ruangRawat'],
            'kelasRawat' => $data['kelasRawat'],
            'spesialistik' => $data['spesialistik'],
            'caraKeluar' => $data['caraKeluar'],
            'kondisiPulang' => $data['kondisiPulang'],
          ),
          'diagnosa' => [],
          'procedure' => [],
          'rencanaTL' =>
          array(
            'tindakLanjut' => $data['tindakLanjut'],
            'dirujukKe' =>
            array(
              'kodePPK' => $data['kodePPK'],
            ),
            'kontrolKembali' =>
            array(
              'tglKontrol' => $data['tglKontrol'],
              'poli' => $data['poli'],
            ),
          ),
          'DPJP' => $data['DPJP'],
          'user' => $data['user'],
        ),
      ),
    );
    // diagnosa
    for ($i = 1; $i <= $data['diagnosa_no']; $i++) {
      $row =   array(
        'kode' => $data['kode_diagnosa_' . $i],
        'level' => $data['level_diagnosa_' . $i],
      );
      array_push($request['request']['t_lpk']['diagnosa'], $row);
    }
    // procedure
    for ($i = 1; $i <= $data['procedure_no']; $i++) {
      $row =   array(
        'kode' => $data['kode_procedure_' . $i],
      );
      array_push($request['request']['t_lpk']['procedure'], $row);
    }
    //
    $service_bpjs = $this->m_service_bpjs->get_first();
    $vclaim_conf = [
      'cons_id' => $service_bpjs['cons_id'],
      'secret_key' => $service_bpjs['secret_key'],
      'base_url' => $service_bpjs['base_url'],
      'service_name' => $service_bpjs['service_name'],
'user_key' => $service_bpjs['user_key'],
    ];

    $peserta = new Nsulistiyawan\Bpjs\VClaim\LembarPengajuanKlaim($vclaim_conf);
    $result = $peserta->insertLPK($request);

    echo json_encode($result, JSON_PRETTY_PRINT);
  }
}
