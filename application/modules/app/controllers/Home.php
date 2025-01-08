<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model([
      'app/m_app',
      'sejarah/m_sejarah',
      'berita/m_berita',
      'galeri/m_galeri'
    ]);
  }

  function index()
  {
    $data['identitas'] = @$this->m_app->identitas_get();
    $data['sejarah'] = @$this->m_sejarah->get_first();
    $data['berita'] = @$this->m_berita->berita_list();
    $data['galeri'] = @$this->m_galeri->galeri_list();
    $data['title'] = 'HOME | DIORAMA ARSIP JOGJA';
    $this->load->view('app/layouts/header', $data);
    $this->load->view('app/home', $data);
    $this->load->view('app/layouts/footer', $data);
  }
}
