<?php $this->load->view('_js'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Melihat Data Ketersediaan Kamar RS</h1>
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
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode PPK <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="kode_ppk" value="<?= @$service['kode_ppk'] ?>" required>
                        <small>Nama atau Kode Faskes</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-12">
                    <h5 class="mb-4 mt-3">Start dan limit berfungsi untuk paging, jika Rumah Sakit ingin menampilkan data dari baris pertama sampai baris kesepuluh maka start = 1 dan limit = 1, nilai start dimulai dari 1</h5>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Start <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" name="start" value="1" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Limit <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" name="limit" value="1000" required>
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