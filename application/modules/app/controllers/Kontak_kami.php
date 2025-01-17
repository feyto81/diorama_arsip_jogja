<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_kami extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model([
      'app/m_app',
    ]);
  }


  function index()
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['title'] = 'KONTAK KAMI | DIORAMA ARSIP JOGJA';
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/kontak_kami', $data);
    $this->load->view('app/layouts/footer', $data);
  }
}
