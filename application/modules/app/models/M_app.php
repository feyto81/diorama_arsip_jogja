<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{
  public function identitas_get()
  {
    return $this->db->query(
      "SELECT 
        * 
      FROM 
        profile"
    )->row_array();
  }
}
