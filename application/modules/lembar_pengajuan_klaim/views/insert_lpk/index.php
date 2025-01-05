<?php $this->load->view('_js'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Insert Lembar Pengajuan Klaim</h1>
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
                    <h5 class="mb-2 mt-n1">LPK (Lembar Pengajuan Klaim)</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSep" value="0301R0011017V000015" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Masuk <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglMasuk" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Keluar <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm col-sm-5 datepicker" name="tglKeluar" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Penjamin <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="jaminan" required>
                          <option value="1">JKN</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="poli" value="INT" required>
                        <small>Kode Poli</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Dokter DPJP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="DPJP" value="3" required>
                        <small>Kode Dokter DPJP => Data di menu Referensi -> Dokter DPJP</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">User Pemakai <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="user" value="Testing WS" required>
                      </div>
                    </div>
                    <h5 class="mb-2 mt-3">Perawatan</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Ruang Rawat <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ruangRawat" value="1" required>
                        <small>Kode Ruang Rawat => Data di menu Referensi -> Ruang Rawat</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Kelas Rawat <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kelasRawat" value="1" required>
                        <small>Kode Kelas Rawat => Data di menu Referensi -> Kelas Rawat</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Spesialistik <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="spesialistik" value="1">
                        <small>Kode Spesialistik => Data di menu Referensi -> Spesialistik</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Cara Keluar <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="caraKeluar" value="1">
                        <small>Kode Cara Keluar => Data di menu Referensi -> Cara Keluar</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Kondisi Pulang <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kondisiPulang" value="1">
                        <small>Kode Kondisi Pulang => Data di menu Referensi -> Pasca Pulang</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-2 mt-3">Diagnosa (BISA INPUT LEBIH DARI 1)</h5>
                    <div id="box-diagnosa"></div>
                    <div id="box-loading-diagnosa"></div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right"></label>
                      <div class="col-sm-7 text-right">
                        <input type="hidden" name="diagnosa_no" id="diagnosa_no" value="0">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm mt-3 mb-2 btn-add-diagnosa" id="add_diagnosa"><i class="fa fa-plus"></i> Tambah Diagnosa</a>
                      </div>
                    </div>
                    <h5 class="mb-2 mt-3">Procedure (BISA INPUT LEBIH DARI 1)</h5>
                    <div id="box-procedure"></div>
                    <div id="box-loading-procedure"></div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right"></label>
                      <div class="col-sm-7 text-right">
                        <input type="hidden" name="procedure_no" id="procedure_no" value="0">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm mt-3 mb-2 btn-add-procedure" id="add_procedure"><i class="fa fa-plus"></i> Tambah Procedure</a>
                      </div>
                    </div>
                    <h5 class="mb-2 mt-3">Rencana Tindak Lanjut</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tindak Lanjut <span class="text-danger">*</span></label>
                      <div class="col-sm-6">
                        <select class="form-control form-control-sm select2-hidden" name="tindakLanjut" required>
                          <option value="1">Diperbolehkan Pulang</option>
                          <option value="2">Pemeriksaan Penunjang</option>
                          <option value="3">Dirujuk Ke</option>
                          <option value="4">Kontrol Kembali</option>
                        </select>
                      </div>
                    </div>
                    <h6 class="mb-2 mt-3">Dirujuk Ke</h6>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Dirujuk Ke</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kodePPK" value="">
                        <small><b>(DIISI KETIKA TINDAK LANJUT DIPILIH 3:DIRUJUK KE)</b></small>
                        <small>Dirujuk Ke => Kode Faskes Tujuan Rujukan</small>
                      </div>
                    </div>
                    <h6 class="mb-2 mt-3">Kontrol Kembali</h6>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl. Kontrol Kembali</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm datepicker" name="tglKontrol" id="tglKontrol" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="poli" value="">
                        <small>Kode Poli => Data di menu Referensi -> Poli</small>
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