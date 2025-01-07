<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{

  public function where($cookie)
  {
    $where = "WHERE a.deleted_st = 0 ";
    if (@$cookie['search']['term'] != '') {
      $where .= "AND a.berita_title LIKE '%" . $this->db->escape_like_str($cookie['search']['term']) . "%' ";
    }
    return $where;
  }

  public function list_data($cookie)
  {
    $where = $this->where($cookie);
    $sql = "SELECT * FROM dat_berita a 
      $where
      ORDER BY "
      . $cookie['order']['field'] . " " . $cookie['order']['type'] .
      " LIMIT " . $cookie['per_page'] .
      " OFFSET " . $cookie['cur_page'];
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function all_data()
  {
    $where = "WHERE a.deleted_st = 0 ";

    $sql = "SELECT * FROM dat_berita a $where ORDER BY created_at";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function all_rows($cookie)
  {
    $where = $this->where($cookie);

    $sql = "SELECT COUNT(1) as total FROM dat_berita a $where";
    $query = $this->db->query($sql);
    return $query->row_array()['total'];
  }

  function by_field($field, $val)
  {
    $sql = "SELECT * FROM dat_berita WHERE $field = ?";
    $query = $this->db->query($sql, array($val));
    $row = $query->row_array();
    return $row;
  }

  public function save($data, $id = null)
  {
    if ($id == null) {
      $data['created_at'] = date('Y-m-d H:i:s');
      $data['created_by'] = $this->session->userdata('user_fullname');
      $this->db->insert('dat_berita', $data);
    } else {
      $data['updated_at'] = date('Y-m-d H:i:s');
      $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->where('berita_id', $id)->update('dat_berita', $data);
    }
  }

  public function update($id, $data)
  {
    $data['updated_at'] = date('Y-m-d H:i:s');
    $data['updated_by'] = $this->session->userdata('fullname');
    $this->db->where('berita_id', $id)->update('dat_berita', $data);
  }

  public function delete($id, $permanent = true)
  {
    if ($permanent) {
      $get_berita = $this->db->query("SELECT * FROM dat_berita WHERE berita_id = '" . @$id . "'")->row_array();
      if (@$get_berita['berita_image'] != '' || @$get_berita['berita_image'] != null) {
        $url_gambar_lama = FCPATH . '/images/berita/' . @$get_berita['berita_image'];
        unlink(@$url_gambar_lama);
      }
      $this->db->where('berita_id', $id)->delete('dat_berita');
    } else {
      $data['deleted_st'] = 1;
      $data['updated_at'] = date('Y-m-d H:i:s');
      $data['updated_by'] = $this->session->userdata('user_fullname');
      $this->db->where('berita_id', $id)->update('dat_berita', $data);
    }
  }

  public function berita_list()
  {
    return $this->db->query("SELECT * FROM dat_berita")->result_array();
  }

  public function berita_detail($id)
  {
    return $this->db->query("SELECT * FROM dat_berita WHERE berita_id = '" . @$id . "'")->row_array();
  }
}
