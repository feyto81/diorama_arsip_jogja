<?php $this->load->view('_js_insert_sep2'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Insert SEP versi 2.0</h1>
          </div>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Referensi</li>
            <li class="breadcrumb-item active"><?= @$menu['menu_name'] ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Input</h3>
            </div>
            <form id="form_submit" action="" method="post" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="mb-4 mt-n2">SEP</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Kartu BPJS <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noKartu" value="0000000720731" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Pelayanan/SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglSep" value="<?= date('Y-m-d') ?>" required>
                        <small class="text-purple">Tanggal Penerbitan SEP</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">PPK Pelayanan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ppkPelayanan" value="1120R001" required>
                        <small class="text-purple">Kode Faskes Pemberi Pelayanan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Jenis Pelayanan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="jnsPelayanan" required>
                          <option value="1">Rawat Inap</option>
                          <option value="2" selected>Rawat Jalan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kelas Rawat Hak<span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="klsRawatHak" required>
                          <option value="1">Kelas 1</option>
                          <option value="2">Kelas 2</option>
                          <option value="3" selected>Kelas 3</option>
                          <!-- <option value="1">VVIP</option>
                          <option value="2">VIP</option>
                          <option value="3">Kelas 1</option>
                          <option value="4">Kelas 2</option>
                          <option value="5" selected>Kelas 3</option>
                          <option value="6">ICCU</option>
                          <option value="7">ICCU</option> -->
                        </select>
                        <small class="text-purple">{sesuai kelas rawat peserta}</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kelas Rawat Naik<span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="klsRawatNaik">
                          <option value="">---</option>
                          <option value="1">VVIP</option>
                          <option value="2">VIP</option>
                          <option value="3">Kelas 1</option>
                          <option value="4">Kelas 2</option>
                          <option value="5">Kelas 3</option>
                          <option value="6">ICCU</option>
                          <option value="7">ICCU</option>
                        </select>
                        <small class="text-purple">{diisi jika naik kelas rawat}</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Pembiayaan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm select2-hidden" name="pembiayaan">
                          <option value="">---</option>
                          <option value="1">1 - Pribadi</option>
                          <option value="2">2 - Pemberi Kerja</option>
                          <option value="3">3 - Asuransi Kesehatan Tambahan</option>
                        </select>
                        <small class="text-purple">{1. Pribadi, 2. Pemberi Kerja, 3. Asuransi Kesehatan Tambahan. diisi jika naik kelas rawat}</small>
                        <!-- <input type="text" class="form-control form-control-sm" name="pembiayaan" value="1" required> -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Penanggung Jawab <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="penanggungJawab" value="">
                        <small class="text-purple">{Contoh: jika pembiayaan 1 maka penanggungJawab=Pribadi. diisi jika naik kelas rawat}</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">No MR/RM <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noMR" value="null" required>
                        <small class="text-purple">Nomor Medical Record RS</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">Rujukan</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Asal Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="asalRujukan" required>
                          <option value="1" selected>Faskes 1</option>
                          <option value="2">Faskes 2(RS)</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm datepicker" name="tglRujukan" id="tglRujukan" value="2021-10-23">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">No Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noRujukan" value="112042161021P000003">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">PPK Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ppkRujukan" value="11204216">
                        <small class="text-purple">Kode Faskes Rujukan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Catatan Peserta</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="catatan" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Diagnosa Awal <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="diagAwal" value="M54.0">
                        <small class="text-purple">Kode Diagnosa Awal ICD-10</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">Poli</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli Tujuan</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tujuan" value="BED">
                        <small class="text-purple">Kode Poli</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli Eksekutif <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="eksekutif" required>
                          <option value="0" selected>Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">COB <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="cob" required>
                          <option value="0" selected>Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Katarak <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="katarak" required>
                          <option value="0" selected>Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-4 mt-n2">Jaminan</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Jaminan Lakalantas <span class="text-danger">*</span></label>
                      <div class="col-sm-5">
                        <select class="form-control form-control-sm select2-hidden" name="lakaLantas" required>
                          <option value="0">Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                        <small class="text-purple">Jaminan Kecelakaan Lalu Lintas</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Penjamin Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="penjamin" value="">
                        <small class="text-purple">Penjamin Lakalantas => 1 : Jasa raharja PT, 2 : BPJS Ketenagakerjaan, 3 : TASPEN PT, 4 : ASABRI PT. <br> jika lebih dari 1 isi => 1,2 (pakai delimiter koma tanpa spasi)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Kejadian</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglKejadian" id="tglKejadian" value="">
                        <small class="text-purple">Tanggal Kejadian Kecelakaan Lalu Lintas</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Keterangan</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="keterangan" value="">
                        <small class="text-purple">Keterangan Kejadian Kecelakaan Lalu Lintas</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Suplesi</label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="suplesi" required>
                          <option value="0">Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor SEP Suplesi</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSepSuplesi" value="">
                        <small class="text-purple">Nomor SEP Yang Jika Terdapat Suplesi</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right mt-n2">Propinsi Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdPropinsi" value="">
                        <small class="text-purple">Kode Propinsi Lokasi Kecalakaan Lalu Lintas => bisa dilihat di menu Referensi -> Propinsi</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right mt-n2">Kabupaten Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdKabupaten" value="">
                        <small class="text-purple">Kode Kabupaten Lokasi Kecalakaan Lalu Lintas => bisa dilihat di menu Referensi -> Kabupaten</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kecamatan Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdKecamatan" value="">
                        <small class="text-purple">Kode Kecamatan Lokasi Kecelakaan Lalu Lintas => bisa dilihat di menu Referensi -> Kecamatan</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">SKDP</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Surat</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSurat" value="">
                        <small class="text-purple">Nomor Surat Kontrol</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode DPJP</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kodeDPJP" value="193515">
                        <small class="text-purple">Kode Dokter DPJP => bisa dilihat di menu Referensi -> Dokter DPJP</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode DPJP Layanan</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="dpjpLayan" value="193515">
                        <small class="text-purple">tidak diisi jika jnsPelayanan = "1" (RANAP)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Telepon <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noTelp" value="08512345678" required>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">QUESTIONNAIRE</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tujuan Kunjungan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm select2-hidden" name="tujuanKunj" required>
                          <option value="0" selected>0 - Normal</option>
                          <option value="1">1 - Prosedur</option>
                          <option value="2">2 - Konsul Dokter</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Flag Prosedur</label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm select2-hidden" name="flagProcedure">
                          <option value="" selected> --- </option>
                          <option value="0">0 - Prosedur Tidak Berkelanjutan</option>
                          <option value="1">1 - Prosedur dan Terapi Berkelanjutan</option>
                        </select>
                        <small class="text-purple">diisi "---" jika Tujuan Kunjungan = "0"</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Penunjang</label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm select2-hidden" name="kdPenunjang">
                          <option value="" selected> --- </option>
                          <option value="1">1 - Radioterapi</option>
                          <option value="2">2 - Kemoterapi</option>
                          <option value="3">3 - Rehabilitasi Medik</option>
                          <option value="4">4 - Rehabilitasi Psikososial</option>
                          <option value="5">5 - Transfusi Darah</option>
                          <option value="6">6 - Pelayanan Gigi</option>
                          <option value="7">7 - Laboratorium</option>
                          <option value="8">8 - USG</option>
                          <option value="9">9 - Farmasi</option>
                          <option value="10">10 - Lain-Lain</option>
                          <option value="11">11 - MRI</option>
                          <option value="12">12 - HEMODIALISA</option>
                        </select>
                        <small class="text-purple">diisi "---" jika Tujuan Kunjungan = "0"</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Asessment Pelayanan</label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm select2-hidden" name="assesmentPel">
                          <option value="" selected> --- </option>
                          <option value="1">1 - Poli spesialis tidak tersedia pada hari sebelumnya</option>
                          <option value="2">2 - Jam Poli telah berakhir pada hari sebelumnya</option>
                          <option value="3">3 - Dokter Spesialis yang dimaksud tidak praktek pada hari sebelumnya</option>
                          <option value="4">4 - Atas Instruksi RS</option>
                        </select>
                        <small class="text-purple">diisi jika Tujuan Kunjungan = "2" atau "0" (politujuan beda dengan poli rujukan dan hari beda)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">User Pembuat SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="user" value="Coba Ws" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-10 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-primary btn-submit"><i class="fas fa-paper-plane"></i> Proses</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Output</h3>
            </div>
            <div class="card-body">
              <pre id="json-renderer">Tidak Ada Data</pre>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div>
<!-- /.content-wrapper -->