<?php

namespace Nsulistiyawan\Bpjs\Apotek;

use Nsulistiyawan\Bpjs\BpjsService;

class Referensi extends BpjsService
{
    public function dpho()
    {
        $response = $this->get('referensi/dpho');
        return json_decode($response, true);
    }

    public function poli($keyword)
    {
        $response = $this->get('referensi/poli/' . $keyword);
        return json_decode($response, true);
    }

    public function ppk($jenisFaskes, $namaFaskes)
    {
        $response = $this->get('referensi/ppk/' . $jenisFaskes . '/' . $namaFaskes);
        return json_decode($response, true);
    }

    public function settingppk($kodeApotek)
    {
        $response = $this->get('referensi/settingppk/read/' . $kodeApotek);
        return json_decode($response, true);
    }

    public function spesialistik()
    {
        $response = $this->get('referensi/spesialistik');
        return json_decode($response, true);
    }

    public function obat($kdJenisObat, $tglResep, $keyword)
    {
        $response = $this->get('referensi/obat/' . $kdJenisObat . '/' . $tglResep . '/' . $keyword);
        return json_decode($response, true);
    }
}
