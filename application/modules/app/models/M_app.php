<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{
  public function save_active_service_bpjs($data)
  {
    // reset all to 0
    $this->db->where('active_st', 1)->update('service_bpjs', ['active_st' => 0]);
    // end reset all to 0

    $this->db->where('service_bpjs_id', $data['active_st'])->update('service_bpjs', ['active_st' => 1]);
  }
}
