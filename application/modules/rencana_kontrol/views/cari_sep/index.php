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
            <h1 class="m-0 text-dark">Melihat data SEP untuk keperluan rencana kontrol</h1>
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
                    <h5 class="mb-4 mt-n2">Form Input Parameter</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor SEP Peserta <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="keyword" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-4 mt-n2">Contoh Data Input Parameter</h5>
                    <div class="form-group row mt-n2">
                      <label for="menu" class="col-sm-12 col-form-label text-left">Nomor SEP Peserta</label>
                      <ul class="col-sm-12 ml-4">
                        <li>-</li>
                      </ul>
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