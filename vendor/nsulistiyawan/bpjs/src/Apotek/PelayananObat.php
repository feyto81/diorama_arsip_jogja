<?php

namespace Nsulistiyawan\Bpjs\Apotek;

use Nsulistiyawan\Bpjs\BpjsService;

class PelayananObat extends BpjsService
{
    public function daftar($noSep)
    {
        $response = $this->get('obat/daftar/' . $noSep);
        return json_decode($response, true);
    }

    public function riwayatobat($tglAwal, $tglAkhir, $noKartu)
    {
        $response = $this->get('riwayatobat/' . $tglAwal . '/' . $tglAkhir . '/' . $noKartu);
        return json_decode($response, true);
    }

    public function hapus($data = [])
    {
        $response = $this->delete('pelayanan/obat/hapus', $data);
        return json_decode($response, true);
    }
}
