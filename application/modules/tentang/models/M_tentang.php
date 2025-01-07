<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{

  public function get_first()
  {
    return $this->db->get('tentang')->row_array();
  }

  public function update($data)
  {
    $this->db->update('tentang', $data);
  }

  public function save($data, $id = null)
  {
    if (@$data['tentang_id'] == '' || @$data['tentang_id'] == null) {
      @$data['tentang_id'] = 1;
      $data['updated_at'] = date('Y-m-d H:i:s');
      $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->insert('tentang', $data);
    } else {
      $data['updated_at'] = date('Y-m-d H:i:s');
      $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->update('tentang', $data);
    }
  }
}
