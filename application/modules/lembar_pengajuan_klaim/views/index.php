<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Lembar Pengajuan Klaim</h1>
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
                <div class="col-md-3">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/insert_lpk' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-edit"></i> INSERT LPK</a>
                </div>
                <div class="col-md-3">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/update_lpk' ?>" class="btn btn-block btn-primary btn-lg"><i class="far fa-edit"></i> UPDATE LPK</a>
                </div>
                <div class="col-md-3">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/delete_lpk' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-trash"></i> DELETE LPK</a>
                </div>
                <div class="col-md-3">
                  <a href="<?= site_url() . '/' . @$menu['controller'] . '/cari_lpk' ?>" class="btn btn-block btn-primary btn-lg"><i class="fas fa-search"></i> CARI LPK</a>
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