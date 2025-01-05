<?php

namespace Nsulistiyawan\Bpjs\Aplicare;

use Nsulistiyawan\Bpjs\BpjsService;

class KetersediaanKamar extends BpjsService
{

    public function refKelas()
    {
        $response = $this->get('ref/kelas');
        return json_decode($response, true);
    }
    public function bedGet($kodePpk, $start, $limit)
    {
        $response = $this->get('bed/read/' . $kodePpk . '/' . $start . '/' . $limit);
        return json_decode($response, true);
    }
    public function bedCreate($kodePpk, $data = [])
    {
        $header = 'application/json';
        $response = $this->post('bed/create/' . $kodePpk, $data, $header);
        return json_decode($response, true);
    }
    public function bedUpdate($kodePpk, $data = [])
    {
        $response = $this->put('bed/update/' . $kodePpk, $data);
        return json_decode($response, true);
    }
    public function bedDelete($kodePpk, $data = [])
    {
        $header = 'application/json; charset=utf-8';
        $response = $this->post('rest/bed/delete/' . $kodePpk, $data, $header);
        var_dump($response);
        die;
        return json_decode($response, true);
    }
}
