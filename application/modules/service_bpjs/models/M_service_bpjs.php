<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_service_bpjs extends CI_Model
{

  public function where($cookie)
  {
    $where = "WHERE 1=1 ";
    return $where;
  }

  public function list_data($cookie)
  {
    $where = $this->where($cookie);
    $sql = "SELECT * FROM service_bpjs a 
      $where
      ORDER BY "
      . $cookie['order']['field'] . " " . $cookie['order']['type'] .
      " LIMIT " . $cookie['cur_page'] . "," . $cookie['per_page'];
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function all_data()
  {
    $where = "WHERE 1=1 ";

    $sql = "SELECT * FROM service_bpjs a $where ORDER BY service_bpjs_id ASC";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function get_first()
  {
    $sql = "SELECT * FROM service_bpjs a WHERE active_st = 1";
    $query = $this->db->query($sql);
    return $query->row_array();
  }

  public function all_rows($cookie)
  {
    $where = $this->where($cookie);

    $sql = "SELECT COUNT(1) as total FROM service_bpjs a $where";
    $query = $this->db->query($sql);
    return $query->row_array()['total'];
  }

  function by_field($field, $val)
  {
    $sql = "SELECT * FROM service_bpjs WHERE $field = ?";
    $query = $this->db->query($sql, array($val));
    $row = $query->row_array();
    return $row;
  }

  public function save($data, $id = null)
  {
    if ($id == null) {
      // $data['created_at'] = date('Y-m-d H:i:s');
      // $data['created_by'] = $this->session->userdata('user_fullname');
      $this->db->insert('service_bpjs', $data);
    } else {
      // $data['updated_at'] = date('Y-m-d H:i:s');
      // $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->where('service_bpjs_id', $id)->update('service_bpjs', $data);
    }
  }

  public function update($id, $data)
  {
    $data['updated_at'] = date('Y-m-d H:i:s');
    $data['updated_by'] = $this->session->userdata('fullname');
    $this->db->where('service_bpjs_id', $id)->update('service_bpjs', $data);
  }

  public function delete($id, $permanent = true)
  {
    if ($permanent) {
      $this->db->where('service_bpjs_id', $id)->delete('service_bpjs');
    } else {
      $data['updated_at'] = date('Y-m-d H:i:s');
      $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->where('service_bpjs_id', $id)->update('service_bpjs', $data);
    }
  }

  public function menu_list($id)
  {
    return $this->db->query(
      "SELECT 
      a.menu_id, a.parent_id, a.menu_name, 
      a.is_read, a.is_create, a.is_update, a.is_delete, a.is_report,
      b._read, b._create, b._update, b._delete, b._report
    FROM menu a
    LEFT JOIN service_bpjs_menu b ON b.menu_id = a.menu_id AND b.service_bpjs_id = '$id'
    ORDER BY a.menu_id"
    )->result_array();
  }

  public function authorization_save($data, $id)
  {
    $this->db->where('service_bpjs_id', $id)->delete('service_bpjs_menu');
    //read
    foreach ($data['_read'] as $k => $v) {
      $this->db->insert('service_bpjs_menu', array(
        'menu_id' => $v,
        'service_bpjs_id' => $id,
        '_read' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata('user_fullname'),
      ));
    }

    //create
    foreach ($data['_create'] as $k => $v) {
      $this->db->where(array('menu_id' => $v, 'service_bpjs_id' => $id))->update('service_bpjs_menu', array(
        '_create' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata('user_fullname'),
      ));
    }

    //update
    foreach ($data['_update'] as $k => $v) {
      $this->db->where(array('menu_id' => $v, 'service_bpjs_id' => $id))->update('service_bpjs_menu', array(
        '_update' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata('user_fullname'),
      ));
    }

    //delete
    foreach ($data['_delete'] as $k => $v) {
      $this->db->where(array('menu_id' => $v, 'service_bpjs_id' => $id))->update('service_bpjs_menu', array(
        '_delete' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata('user_fullname'),
      ));
    }

    //report
    foreach ($data['_report'] as $k => $v) {
      $this->db->where(array('menu_id' => $v, 'service_bpjs_id' => $id))->update('service_bpjs_menu', array(
        '_report' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata('user_fullname'),
      ));
    }
  }
}
