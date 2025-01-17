<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('authorize')) {
  function authorize($menu, $field)
  {
    if ($menu[$field] == false) redirect(site_url() . '/error/403');
  }
}

if (!function_exists('get_cookie_menu')) {
  function get_cookie_menu($menu_id)
  {
    $menu_id = str_replace('.', '_', $menu_id);
    $CI = get_instance();
    if (is_null(get_cookie($menu_id))) {
      $val = array(
        'search' => null,
        'per_page' => null,
        'cur_page' => null,
        'total_rows' => null,
        'order' => null
      );
      $cookie = array(
        'name'   => $menu_id,
        'value'  => json_encode($val),
        'expire' => '120'
      );
      $CI->input->set_cookie($cookie);
      return $val;
    } else {
      return json_decode(get_cookie($menu_id), TRUE);
    }
  }
}

if (!function_exists('set_cookie_menu')) {
  function set_cookie_menu($menu_id, $cookie_val)
  {
    $menu_id = str_replace('.', '_', $menu_id);
    $CI = get_instance();
    $cookie = array(
      'name'   => $menu_id,
      'value'  => json_encode($cookie_val),
      'expire' => '120'
    );
    $CI->input->set_cookie($cookie);
  }
}

if (!function_exists('set_pagination')) {
  function set_pagination($menu, $data, $id = null)
  {
    $CI = get_instance();
    $config['per_page'] = $data['per_page'];
    $config['base_url'] = site_url() . '/' . $menu['controller'] . '/index/' . $id;
    $config['total_rows'] = $data['total_rows'];
    $CI->pagination->initialize($config);
  }
}

if (!function_exists('pagination_info')) {
  function pagination_info($list_rows, $data)
  {
    $str = '<i class="fas fa-eye"></i> Tampil ';
    if ($list_rows == 0) {
      $str .= '0 - 0 dari 0';
    } else {
      if ($list_rows > 0) {
        $str .= (num_id($data['cur_page'] + 1));
      } else {
        $str .= (num_id($data['cur_page']));
      }
      $str .= " - " . (num_id($data['cur_page'] + $list_rows) . " dari " . num_id($data['total_rows']));
    }
    $str .= " data";
    return $str;
  }
}

if (!function_exists('create_log')) {
  function create_log($access = '8dccd8fc-fb8b-4829-ae6f-867507e73560', $module = "")
  {
    $CI = get_instance();

    $acc = $CI->db->where('id', $access)->get('access')->row_array();

    if ($CI->agent->is_browser()) {
      $agent = $CI->agent->browser() . ' ' . $CI->agent->version();
    } elseif ($CI->agent->is_robot()) {
      $agent = $CI->agent->robot();
    } elseif ($CI->agent->is_mobile()) {
      $agent = $CI->agent->mobile();
    } else {
      $agent = 'Unidentified';
    }

    $data = array(
      'user_id' => @$CI->session->userdata('user_id'),
      'session_id' => @$CI->session->session_id,
      'fullname' => @$CI->session->userdata('fullname'),
      'access' => @$acc['access'],
      'ip_address' => @$CI->input->ip_address(),
      'user_agent' => @$agent,
      'platform' => @$CI->agent->platform(),
      'module' => @$module,
      'url' => @current_url(),
      'description' => @$acc['description'],
      'created' => @date('Y-m-d H:i:s')
    );

    $file = APPPATH . 'logs/access-' . date('Y-m-d') . '.json';
    $log = json_decode(read_file($file));
    if ($log === null) {
      $log = array();
    };
    array_push($log, $data);
    write_file($file, json_encode($log), 'w+');
  }
}

if (!function_exists('table_sort')) {
  function table_sort($menu_id, $title, $field, $order)
  {
    $url = ($order['type'] == 'asc') ? 'desc' : 'asc';
    $icon = ($order['type'] == 'asc') ? 'sort-up' : 'sort-down';
    if ($order['field'] == $field) :
      return '<a class="text-dark" href="' . site_url() . '/app/order/' . $menu_id . '/' . $field . '/' . $url . '">' . $title . ' <i class="fa fa-' . $icon . '"></i></a>';
    else :
      return '<a class="text-dark" href="' . site_url() . '/app/order/' . $menu_id . '/' . $field . '/asc">' . $title . ' <i class="fa fa-sort"></i></a>';
    endif;
  }
}

if (!function_exists('month_id')) {
  function month_id($val = null)
  {
    $arr = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    if ($val == null) {
      return $arr;
    } else {
      return $arr[intval($val) - 1];
    }
  }
}

if (!function_exists('date_id')) {
  function date_id($date = null)
  {
    if ($date == null) {
      return $date;
    } else {
      $arr_date = explode('-', $date);
      if (count($arr_date) != 3) {
        return $date;
      } else {
        return $arr_date[2] . " " . month_id($arr_date[1]) . " " . $arr_date[0];
      }
    }
  }
}

if (!function_exists('reverse_date')) {
  function reverse_date($date = null, $sp = null, $tp = null, $sp2 = null)
  {
    if ($date != '') {
      if ($tp == 'date') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
      } elseif ($tp == 'full_date') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
        $time = $arr_date[1];
      }
      $arr = explode('-', $date);
      if ($sp != '') {
        $result = $arr[2] . $sp . $arr[1] . $sp . $arr[0];
      } else {
        $result = $arr[2] . '-' . $arr[1] . '-' . $arr[0];
      }
      if ($tp == 'full_date') {
        if ($sp2 != '') {
          $result .= $sp2 . $time;
        } else {
          $result .= ' ' . $time;
        }
      }
    } else {
      $result = '';
    }
    return $result;
  }
}

if (!function_exists('num_sys')) {
  function num_sys($val = null)
  {
    $val = str_replace('.', '', $val);
    $val = str_replace(',', '.', $val);
    return $val;
  }
}

if (!function_exists('num_id')) {
  function num_id($v, $s = null)
  {
    if (is_numeric($v)) {
      $res = number_format($v, 0, ",", ".");
      if ($s != null && $v == 0) return $s;
      else return $res;
    } else {
      return $s;
    }
  }
}

if (!function_exists('date_difference')) {
  function date_difference($date_1, $date_2, $differenceFormat = '%a')
  {
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);
  }
}

if (!function_exists('list_bulan')) {
  function list_bulan()
  {
    $data = array(
      '01' => 'Januari',
      '02' => 'Februari',
      '03' => 'Maret',
      '04' => 'April',
      '05' => 'Mei',
      '06' => 'Juni',
      '07' => 'Juli',
      '08' => 'Agustus',
      '09' => 'September',
      '10' => 'Oktober',
      '11' => 'November',
      '12' => 'Desember',
    );
    return $data;
  }
}


// create dd function
if (!function_exists('dd')) {
  function dd(...$vars)
  {
    foreach ($vars as $var) {
      echo '<pre>';
      var_dump($var);
      echo '</pre>';
    }
    die;
  }
}

if (!function_exists('get_bulan')) {
  function get_bulan($bln)
  {
    switch ($bln) {
      case 1:
        return "Januari";
        break;
      case 2:
        return "Februari";
        break;
      case 3:
        return "Maret";
        break;
      case 4:
        return "April";
        break;
      case 5:
        return "Mei";
        break;
      case 6:
        return "Juni";
        break;
      case 7:
        return "Juli";
        break;
      case 8:
        return "Agustus";
        break;
      case 9:
        return "September";
        break;
      case 10:
        return "Oktober";
        break;
      case 11:
        return "November";
        break;
      case 12:
        return "Desember";
        break;
    }
  }
}
if (!function_exists('get_bulan_v2')) {
  function get_bulan_v2($bln)
  {
    switch ($bln) {
      case '01':
        return "Januari";
        break;
      case '02':
        return "Februari";
        break;
      case '03':
        return "Maret";
        break;
      case '04':
        return "April";
        break;
      case '05':
        return "Mei";
        break;
      case '06':
        return "Juni";
        break;
      case '07':
        return "Juli";
        break;
      case '08':
        return "Agustus";
        break;
      case '09':
        return "September";
        break;
      case '10':
        return "Oktober";
        break;
      case '11':
        return "November";
        break;
      case '12':
        return "Desember";
        break;
    }
  }
}

if (!function_exists('get_bulan_v3')) {
  function get_bulan_v3($tanggal)
  {
    $bulan = date('m', strtotime($tanggal));

    switch ($bulan) {
      case '01':
        return "Januari";
      case '02':
        return "Februari";
      case '03':
        return "Maret";
      case '04':
        return "April";
      case '05':
        return "Mei";
      case '06':
        return "Juni";
      case '07':
        return "Juli";
      case '08':
        return "Agustus";
      case '09':
        return "September";
      case '10':
        return "Oktober";
      case '11':
        return "November";
      case '12':
        return "Desember";
      default:
        return "Bulan tidak valid";
    }
  }
}

if (!function_exists('get_bulan_singkat')) {
  function get_bulan_singkat($bln)
  {
    switch ($bln) {
      case 1:
        return "Jan";
        break;
      case 2:
        return "Feb";
        break;
      case 3:
        return "Mar";
        break;
      case 4:
        return "Apr";
        break;
      case 5:
        return "Mei";
        break;
      case 6:
        return "Jun";
        break;
      case 7:
        return "Jul";
        break;
      case 8:
        return "Agus";
        break;
      case 9:
        return "Sep";
        break;
      case 10:
        return "Okt";
        break;
      case 11:
        return "Nov";
        break;
      case 12:
        return "Des";
        break;
    }
  }
}


if (!function_exists('to_date')) {
  function to_date($date = null, $sp = null, $tp = null, $sp2 = null)
  {
    if ($date != '' && $date != null) {
      if ($tp == 'date') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
      } elseif ($tp == 'full_date') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
        $time = $arr_date[1];
      } elseif ($tp == 'time') {
        $arr_date = explode(' ', $date);
        $time = $arr_date[1];
      } elseif ($tp == 'hour_minute') {
        $arr_date = explode(' ', $date);
        $time = $arr_date[1];
        $arr_time = explode(':', $time);
        $hour = @$arr_time[0];
        $minute = @$arr_time[1];
      } elseif ($tp == 'only_day_month_name') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
      } elseif ($tp == 'only_year') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
      } elseif ($tp == 'only_day') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
      } elseif ($tp == 'date_hour_minute') {
        $arr_date = explode(' ', $date);
        $date = $arr_date[0];
        $time = $arr_date[1];
        $arr_time = explode(':', $time);
        $hour = @$arr_time[0];
        $minute = @$arr_time[1];
      }
      $arr = explode('-', $date);
      if (@$arr[2] == '') {
        $arr = explode('/', $date);
      }
      if ($sp != '') {
        $result = $arr[2] . $sp . $arr[1] . $sp . $arr[0];
      } else {
        $result = $arr[2] . '-' . $arr[1] . '-' . $arr[0];
      }
      if ($tp == 'full_date') {
        if ($sp2 != '') {
          $result .= $sp2 . $time;
        } else {
          $result .= ' ' . $time;
        }
      }
      if ($tp == 'time') {
        $result = $time;
      }
      if ($tp == 'hour_minute') {
        $result = $hour . ':' . $minute;
      }
      if ($tp == 'only_year') {
        $result = $arr[0];
      }
      if ($tp == 'only_month') {
        $result = $arr[1];
      }
      if ($tp == 'only_month_name') {
        $result = get_bulan($arr[1]);
      }
      if ($tp == 'only_month_short_name') {
        $result = get_bulan_singkat($arr[1]);
      }
      if ($tp == 'only_day') {
        $result = $arr[2];
      }
      if ($tp == 'only_day_month_name') {
        if ($sp != null) {
          $result = $arr[2] . $sp . get_bulan($arr[1]);
        } else {
          $result = $arr[2] . '-' . $arr[1];
        }
      }
      if ($tp == 'date_hour_minute') {
        $result .= ' ' . $hour . ':' . $minute;
      }
    } else {
      $result = null;
    }

    if ($result == '00-00-0000' || $result == '0000-00-00' || $result == '00-00-0000 00:00:00' || $result == '0000-00-00 00:00:00') {
      $result = null;
    }

    return $result;
  }
}

if (!function_exists('p_to_space')) {
  function p_to_space($val = null)
  {
    $val = str_replace('<p>', ' ', $val);
    $val = str_replace('</p>', ' ', $val);
    return $val;
  }
}
