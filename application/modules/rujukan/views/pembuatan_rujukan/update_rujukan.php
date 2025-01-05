<?php $this->load->view('_js_update_rujukan'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Update Rujukan</h1>
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
                    <h5 class="mb-4 mt-n2">Rujukan</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noRujukan" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">PPK Dirujuk <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="ppkDirujuk" value="1120R001" required>
                        <small>Kode Faskes Dirujuk</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tipe Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="tipe" required>
                          <option value="0">Penuh</option>
                          <option value="1">Partial</option>
                          <option value="2">Rujuk Balik</option>
                        </select>
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
                      <label for="menu" class="col-sm-4 col-form-label text-right">Catatan Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="catatan" value="" required>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-4 mt-n2">&nbsp;</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Diagnosa Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="diagRujukan" value="A00.1" required>
                        <small>Kode Diagnosa Rujukan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tipe Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm select2-hidden" name="tipeRujukan" required>
                          <option value="0">Penuh</option>
                          <option value="1">Partial</option>
                          <option value="2">Rujuk Balik</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Poli Rujukan <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="poliRujukan" value="INT" required>
                        <small>Kode Poli Rujukan</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">User Pemakai <span class="text-danger">*</span></label>
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