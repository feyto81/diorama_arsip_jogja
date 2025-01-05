<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Cari Rujukan</h1>
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
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <a href="<?= site_url() . '/' . @$menu['controller'] . '/no_rujukan_index' ?>" class="btn btn-block text-left btn-primary btn-lg mb-3"><i class="far fa-list-alt"></i> RUJUKAN BERDASARKAN NOMOR RUJUKAN</a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?= site_url() . '/' . @$menu['controller'] . '/no_kartu_one_index' ?>" class="btn btn-block text-left btn-primary btn-lg mb-3"><i class="far fa-address-card"></i> RUJUKAN BERDASARKAN NOMOR KARTU (1 RECORD)</a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?= site_url() . '/' . @$menu['controller'] . '/no_kartu_multi_index' ?>" class="btn btn-block text-left btn-primary btn-lg mb-3"><i class="far fa-address-card"></i> RUJUKAN BERDASARKAN NOMOR KARTU (MULTI RECORD)</a>
                    </div>
                  </div>
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