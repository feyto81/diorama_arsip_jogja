<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model([
      'app/m_app',
      'galeri/m_galeri',
    ]);
  }


  function index()
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['main'] = @$this->m_galeri->galeri_list();
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/galeri_list', $data);
    $this->load->view('app/layouts/footer', $data);
  }
}
