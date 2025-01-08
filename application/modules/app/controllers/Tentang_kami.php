<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model([
      'app/m_app',
      'tentang/m_tentang',
    ]);
  }


  function index()
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['main'] = @$this->m_tentang->get_first();
    $data['title'] = 'TENTANG KAMI | DIORAMA ARSIP JOGJA';
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/tentang_detail', $data);
    $this->load->view('app/layouts/footer', $data);
  }
}
