<?php $this->load->view('_js_insert_sep'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Insert SEP versi 1.1</h1>
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
                        <input type="text" class="form-control form-control-sm" name="noKartu" value="0002941099007" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Pelayanan/SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglSep" value="" required>
                        <small>Tanggal Penerbitan SEP</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">PPK Pelayanan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ppkPelayanan" value="1120R001" required>
                        <small>Kode Faskes Pemberi Pelayanan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Jenis Pelayanan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="jnsPelayanan" required>
                          <option value="1">Rawat Inap</option>
                          <option value="2">Rawat Jalan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kelas Rawat <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="klsRawat" required>
                          <option value="1">Kelas 1</option>
                          <option value="2">Kelas 2</option>
                          <option value="3">Kelas 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">No MR/RM <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noMR" value="" required>
                        <small>Nomor Medical Record RS</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">Rujukan</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Asal Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="asalRujukan" required>
                          <option value="1">Faskes 1</option>
                          <option value="2">Faskes 2(RS)</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm datepicker" name="tglRujukan" id="tglRujukan" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">No Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noRujukan" value="112034070821P000995">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">PPK Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ppkRujukan" value="1120R001">
                        <small>Kode Faskes Rujukan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Catatan Peserta <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="catatan" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Diagnosa Awal <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="diagAwal" value="A00.1">
                        <small>Kode Diagnosa Awal ICD-10</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">Poli</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli Tujuan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tujuan" value="INT" required>
                        <small>Kode Poli</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli Eksekutif <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="eksekutif" required>
                          <option value="0">Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">COB <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="cob" required>
                          <option value="0">Tidak</option>
                          <option value="1">Iya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Katarak <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="katarak" required>
                          <option value="0">Tidak</option>
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
                        <small>Jaminan Kecelakaan Lalu Lintas</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Penjamin Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="penjamin" value="">
                        <small>Penjamin Lakalantas => 1 : Jasa raharja PT, 2 : BPJS Ketenagakerjaan, 3 : TASPEN PT, 4 : ASABRI PT. <br> jika lebih dari 1 isi => 1,2 (pakai delimiter koma tanpa spasi)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Kejadian</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglKejadian" id="tglKejadian" value="">
                        <small>Tanggal Kejadian Kecelakaan Lalu Lintas</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Keterangan</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="keterangan" value="">
                        <small>Keterangan Kejadian Kecelakaan Lalu Lintas</small>
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
                        <small>Nomor SEP Yang Jika Terdapat Suplesi</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right mt-n2">Propinsi Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdPropinsi" value="">
                        <small>Kode Propinsi Lokasi Kecalakaan Lalu Lintas => bisa dilihat di menu Referensi -> Propinsi</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right mt-n2">Kabupaten Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdKabupaten" value="">
                        <small>Kode Kabupaten Lokasi Kecalakaan Lalu Lintas => bisa dilihat di menu Referensi -> Kabupaten</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kecamatan Lokasi Lakalantas</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kdKecamatan" value="">
                        <small>Kode Kecamatan Lokasi Kecelakaan Lalu Lintas => bisa dilihat di menu Referensi -> Kecamatan</small>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-n2">SKDP</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Surat <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSurat" value="" required>
                        <small>Nomor Surat Kontrol</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode DPJP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kodeDPJP" value="193515" required>
                        <small>Kode Dokter DPJP => bisa dilihat di menu Referensi -> Dokter DPJP</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Telepon <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noTelp" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">User Pembuat SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="user" value="" required>
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