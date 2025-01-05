<?php

namespace Nsulistiyawan\Bpjs\Apotek;

use Nsulistiyawan\Bpjs\BpjsService;

class Monitoring extends BpjsService
{
    public function klaim($bulan, $tahun, $jenisObat, $status)
    {
        $response = $this->get('monitoring/klaim/' . $bulan . '/' . $tahun . '/' . $jenisObat . '/' . $status);
        return json_decode($response, true);
    }
}
