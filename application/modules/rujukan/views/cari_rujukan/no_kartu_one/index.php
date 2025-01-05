<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-8">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Rujukan Berdasarkan Nomor Kartu (1 Record)</h1>
          </div>
        </div><!-- /.col -->
        <div class="col-sm-4">
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
                    <div class="col-md-6">
                      <a href="<?= site_url() . '/' . @$menu['controller'] . '/no_kartu_one_pcare' ?>" class="btn btn-block text-left btn-primary btn-lg"><i class="far fa-address-card"></i> PCARE</a>
                    </div>
                    <div class="col-md-6">
                      <a href="<?= site_url() . '/' . @$menu['controller'] . '/no_kartu_one_rs' ?>" class="btn btn-block text-left btn-primary btn-lg"><i class="fas fa-ambulance"></i> RUMAH SAKIT</a>
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