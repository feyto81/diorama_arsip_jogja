<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model([
      'app/m_app',
      'berita/m_berita',
    ]);
  }

  function detail($id)
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['main'] = @$this->m_berita->berita_detail($id);
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/berita_detail', $data);
    $this->load->view('app/layouts/footer', $data);
  }

  function index()
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['main'] = @$this->m_berita->berita_list();
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/berita_index', $data);
    $this->load->view('app/layouts/footer', $data);
  }
}
