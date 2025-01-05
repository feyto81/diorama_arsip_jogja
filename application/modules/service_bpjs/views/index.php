<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5 class="m-0 text-dark"><i class="<?= @$menu['icon'] ?>"></i> <?= @$menu['menu_name'] ?></h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Pengaturan</li>
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
              <h3 class="card-title">Daftar <?= $menu['menu_name'] ?></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <?php if ($menu['_create'] == 1 || $menu['_update'] == 1) : ?>
                    <a class="btn btn-sm btn-primary" href="<?= site_url() . '/' . $menu['controller'] . '/form' ?>"><i class="fas fa-plus-circle"></i> Tambah</a>
                  <?php endif; ?>
                </div>
                <div class="col-md-3 offset-md-3">
                  <form action="<?= site_url() . '/app/search/' . $menu['menu_id'] ?>" method="post" autocomplete="off">
                    <div class="input-group input-group-sm">
                      <input class="form-control" type="text" name="term" value="<?= @$cookie['search']['term'] ?>" placeholder="Pencarian">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        <a class="btn btn-default" href="<?= site_url() . '/app/reset/' . $menu['menu_id'] ?>"><i class="fas fa-sync-alt"></i></a>
                      </span>
                    </div>
                  </form>
                </div>
              </div><!-- /.row -->
              <div class="row mb-2 mt-2">
                <div class="col-md-6">
                  <div class="input-group-prepend">
                    <span class="mr-1 pt-1">Tampilkan </span>
                    <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <?= @$cookie['per_page'] ?>
                    </button>
                    <span class="ml-1 pt-1">data.</span>
                    <div class="dropdown-menu">
                      <a class="dropdown-item <?= (@$cookie['per_page'] == 10) ? 'active' : '' ?>" href="<?= site_url() . '/app/per_page/' . $menu['menu_id'] . '/10' ?>">10</a>
                      <a class="dropdown-item <?= (@$cookie['per_page'] == 25) ? 'active' : '' ?>" href="<?= site_url() . '/app/per_page/' . $menu['menu_id'] . '/25' ?>">25</a>
                      <a class="dropdown-item <?= (@$cookie['per_page'] == 50) ? 'active' : '' ?>" href="<?= site_url() . '/app/per_page/' . $menu['menu_id'] . '/50' ?>">50</a>
                      <a class="dropdown-item <?= (@$cookie['per_page'] == 100) ? 'active' : '' ?>" href="<?= site_url() . '/app/per_page/' . $menu['menu_id'] . '/100' ?>">100</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <span class="pt-1"><?= @$pagination_info ?></span>
                </div>
              </div><!-- /.row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="flash-success" data-flashsuccess="<?= $this->session->flashdata('flash_success') ?>"></div>
                  <div class="table-responsive">
                    <table class="table table-bordered table-sm table-head-fixed">
                      <thead>
                        <tr>
                          <th class="text-center" width="40">No.</th>
                          <th class="text-center" width="10">
                            <div class="pretty p-icon">
                              <input class="checkall" type="checkbox" name="checkall" onclick="checkAll(this);" />
                              <div class="state">
                                <i class="icon fas fa-check"></i><label></label>
                              </div>
                            </div>
                          </th>
                          <th class="text-center" width="70">Aksi</th>
                          <th class="text-center" width="100">Rumah Sakit</th>
                          <th class="text-center" width="100">Kode PPK</th>
                          <th class="text-center" width="100">Cons ID</th>
                          <th class="text-center" width="100">User Key</th>
                          <th class="text-center" width="100">Secret Key</th>
                          <th class="text-center" width="100">Cons ID Antrean</th>
                          <th class="text-center" width="100">Secret Key Antrean</th>
                          <th class="text-center" width="100">User Key Antrean</th>
                        </tr>
                      </thead>
                      <?php if (@$main == null) : ?>
                        <tbody>
                          <tr>
                            <td class="text-center" colspan="99"><i>Tidak ada data!</i></td>
                          </tr>
                        </tbody>
                      <?php else : ?>
                        <tbody>
                          <form id="form-multiple" action="" method="post">
                            <?php $i = 1;
                            foreach ($main as $r) : ?>
                              <tr>
                                <td class="text-center"><?= $cookie['cur_page'] + ($i++) ?></td>
                                <td class="text-center">
                                  <div class="pretty p-icon">
                                    <input class="checkitem" type="checkbox" value="<?= $r['service_bpjs_id'] ?>" name="checkitem[]" onclick="checkItem();" />
                                    <div class="state">
                                      <i class="icon fas fa-check"></i><label></label>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <?php if ($menu['_update'] == 1) : ?>
                                    <a class="text-warning mr-1" href="<?= site_url() . '/' . $menu['controller'] . '/form/' . $r['service_bpjs_id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                  <?php endif; ?>
                                  <?php if ($menu['_delete'] == 1) : ?>
                                    <a class="text-danger btn-delete" href="<?= site_url() . '/' . $menu['controller'] . '/delete/' . $r['service_bpjs_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                                  <?php endif; ?>
                                </td>
                                <td class="text-center"><?= $r['rs_name'] ?></td>
                                <td class="text-center"><?= $r['kode_ppk'] ?></td>
                                <td class="text-center"><?= $r['cons_id'] ?></td>
                                <td class="text-center"><?= $r['secret_key'] ?></td>
                                <td class="text-center"><?= $r['user_key'] ?></td>
                                <td class="text-center"><?= $r['cons_id_antrean'] ?></td>
                                <td class="text-center"><?= $r['secret_key_antrean'] ?></td>
                                <td class="text-center"><?= $r['user_key_antrean'] ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </form>
                        </tbody>
                      <?php endif; ?>
                    </table>
                  </div>
                </div>
              </div><!-- /.row -->
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Aksi
                    </button>
                    <div class="dropdown-menu">
                      <?php if ($menu['_update'] == 1) : ?>
                        <a class="dropdown-item" href="javascript:multipleAction('enable')">Aktif</a>
                        <a class="dropdown-item" href="javascript:multipleAction('disable')">Non Aktif</a>
                      <?php endif; ?>
                      <?php if ($menu['_delete'] == 1) : ?>
                        <a class="dropdown-item" href="javascript:multipleAction('delete')">Hapus</a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 float-right">
                  <?php echo $this->pagination->create_links(); ?>
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