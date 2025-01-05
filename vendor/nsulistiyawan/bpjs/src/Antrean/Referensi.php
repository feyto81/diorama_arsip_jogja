<?php

namespace Nsulistiyawan\Bpjs\Antrean;

use Nsulistiyawan\Bpjs\BpjsServiceAntrean;

class Referensi extends BpjsServiceAntrean
{
    public function poli()
    {
        $response = $this->get('ref/poli');
        return json_decode($response, true);
    }

    public function dokter()
    {
        $response = $this->get('ref/dokter');
        return json_decode($response, true);
    }

    public function jadwalDokter($kodepoli, $tanggal)
    {
        $response = $this->get('jadwaldokter/kodepoli/' . $kodepoli . '/tanggal/' . $tanggal);
        return json_decode($response, true);
    }

    public function getlisttask($data = [])
    {
        $response = $this->post('antrean/getlisttask', $data);
        return json_decode($response, true);
    }

    public function dashboardPerTanggal($tanggal, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/tanggal/' . $tanggal . '/waktu/' . $waktu, false);
        return json_decode($response, true);
    }

    public function dashboardPerBulan($bulan, $tahun, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/bulan/' . $bulan . '/tahun/' . $tahun . '/waktu/' . $waktu, false);
        return json_decode($response, true);
    }

    public function antreanPerTanggal($tanggal)
    {
        $response = $this->get('antrean/pendaftaran/tanggal/' . @$tanggal);
        return json_decode($response, true);
    }

    public function antreanPerKodeBooking($kodebooking)
    {
        $response = $this->get('antrean/pendaftaran/kodebooking/' . @$kodebooking);
        return json_decode($response, true);
    }

    public function antreanBelumDilayani()
    {
        $response = $this->get('antrean/pendaftaran/aktif');
        return json_decode($response, true);
    }

    public function antreanBelumDilayaniPer($data = [])
    {
        $response = $this->get('antrean/pendaftaran/kodepoli/' . $data['kodepoli'] . '/kodedokter/' . $data['kodedokter'] . '/hari/' . $data['hari'] . '/jampraktek/' . $data['jampraktek']);
        return json_decode($response, true);
    }

    public function batalAntrean($data = [])
    {
        $response = $this->post('antrean/batal', $data);
        return json_decode($response, true);
    }
}
