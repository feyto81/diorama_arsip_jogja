<?php $this->load->view('_js'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Klaim</h1>
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
                    <h5 class="mb-4 mt-n2">Form Input Parameter</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Bulan <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <select class="form-control form-control-sm select2-hidden" name="bulan" required>
                          <?php foreach (list_bulan() as $key => $val) : ?>
                            <option value="<?= $key ?>"><?= $val ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tahun <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="tahun" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Jenis Obat <span class="text-danger">*</span></label>
                      <div class="col-sm-5">
                        <select class="form-control form-control-sm select2-hidden" name="jenisObat" required>
                          <option value="0">Semua</option>
                          <option value="1">Obat PRB</option>
                          <option value="2">Obat Kronis Belum Stabil</option>
                          <option value="3">Obat Kemoterapi</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Status <span class="text-danger">*</span></label>
                      <div class="col-sm-5">
                        <select class="form-control form-control-sm select2-hidden" name="status" required>
                          <option value="1">Belum Diverifikasi</option>
                          <option value="2">Sudah Verifikasi</option>
                        </select>
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