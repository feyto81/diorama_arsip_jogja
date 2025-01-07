<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sejarah extends CI_Model
{

  public function get_first()
  {
    return $this->db->get('sejarah')->row_array();
  }

  public function update($data)
  {
    $this->db->update('sejarah', $data);
  }

  public function save($data)
  {
    $data['updated_at'] = date('Y-m-d H:i:s');
    $data['updated_by'] = $this->session->userdata('user_fullname');
    $this->db->update('sejarah', $data);
  }
}
