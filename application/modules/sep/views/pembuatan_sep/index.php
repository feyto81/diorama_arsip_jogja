<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pembuatan SEP</h1>
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
              <h3 class="card-title">Pilih Action Dibawah</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/insert_sep' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-edit"></i> INSERT SEP</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/update_sep' ?>" class="btn btn-block btn-primary btn-lg"><i class="far fa-edit"></i> UPDATE SEP</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/hapus_sep' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-trash"></i> HAPUS SEP</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/cari_sep' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-search"></i> CARI SEP</a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/insert_sep2' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-edit"></i> INSERT SEP 2.0</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/update_sep2' ?>" class="btn btn-block btn-primary btn-lg"><i class="far fa-edit"></i> UPDATE SEP 2.0</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/hapus_sep2' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-trash"></i> HAPUS SEP 2.0</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">SEP Internal</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/data_sep_internal' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-edit"></i> DATA SEP INTERNAL</a>
                </div>
                <div class="col-md-3 mb-2">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/hapus_sep_internal' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-trash"></i> HAPUS SEP INTERNAL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div>
<!-- /.content-wrapper -->