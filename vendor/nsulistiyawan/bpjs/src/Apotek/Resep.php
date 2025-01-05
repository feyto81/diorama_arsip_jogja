<?php

namespace Nsulistiyawan\Bpjs\Apotek;

use Nsulistiyawan\Bpjs\BpjsService;

class Resep extends BpjsService
{
    public function simpanResep($data = [])
    {
        $response = $this->post('sjpresep/v3/insert', $data);
        return json_decode($response, true);
    }

    public function daftarResep($data = [])
    {
        $response = $this->post('daftarresep', $data);
        return json_decode($response, true);
    }

    public function hapusResep($data = [])
    {
        $response = $this->delete('hapusresep', $data);
        return json_decode($response, true);
    }
}
