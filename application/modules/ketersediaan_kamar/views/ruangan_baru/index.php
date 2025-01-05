<?php $this->load->view('_js'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Insert Ruangan Baru</h1>
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
                    <h5 class="mb-4 mt-n2">Kode PPK</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode PPK <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kode_ppk" value="" required>
                      </div>
                    </div>
                    <h5 class="mb-4 mt-3">Form Input Parameter</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Kelas <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kodekelas" value="" required>
                        <small>kode kelas ruang rawat sesuai dengan mapping BPJS Kesehatan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Ruang <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="koderuang" value="" required>
                        <small>kode ruangan Rumah Sakit</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nama Ruang <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="namaruang" value="" required>
                        <small>nama ruang rawat Rumah Sakit</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kapasitas <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kapasitas" value="" required>
                        <small>Kapasitas ruang Rumah Sakit</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tersedia <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tersedia" value="" required>
                        <small>Jumlah tempat tidur yang kosong / dapat ditempati pasien baru</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-12">
                    <h5 class="mb-4 mt-3">* Untuk Rumah Sakit yang ingin mencantumkan informasi ketersediaan tempat tidur untuk pasien laki – laki, perempuan, laki – laki atau perempuan</h5>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tersedia Pria <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tersediapria" value="" required>
                        <small>Jumlah tempat tidur yang kosong / dapat ditempati pasien baru laki-laki</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tersedia Wanita <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tersediawanita" value="" required>
                        <small>Jumlah tempat tidur yang kosong / dapat ditempati pasien baru perempuang</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tersedia Pria Wanita <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="tersediapriawanita" value="" required>
                        <small>Jumlah tempat tidur yang kosong / dapat ditempati pasien baru laki – laki atau perempuan</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
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