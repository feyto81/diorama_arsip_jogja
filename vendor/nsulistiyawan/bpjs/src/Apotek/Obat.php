<?php

namespace Nsulistiyawan\Bpjs\Apotek;

use Nsulistiyawan\Bpjs\BpjsService;

class Obat extends BpjsService
{
    public function nonRacikan($data = [])
    {
        $response = $this->post('obatnonracikan/v3/insert', $data);
        return json_decode($response, true);
    }

    public function racikan($data = [])
    {
        $response = $this->post('obatracikan/v3/insert', $data);
        return json_decode($response, true);
    }
}
