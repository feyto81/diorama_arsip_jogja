<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h5 class="m-0 text-dark"><i class="<?= @$menu['icon'] ?>"></i> <?= @$menu['menu_name'] ?></h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active"><?= @$menu['menu_name'] ?></li>
            <li class="breadcrumb-item active"><?= ($id == null) ? 'Tambah' : 'Ubah'; ?></li>
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
              <h3 class="card-title">Form <?= $menu['menu_name'] ?></h3>
            </div>
            <form id="form" action="<?= site_url() . '/' . $menu['controller'] . '/save/' . $id ?>" method="post" autocomplete="off">
              <div class="card-body">
                <div class="flash-error" data-flasherror="<?= $this->session->flashdata('flash_error') ?>"></div>
                <input type="hidden" class="form-control form-control-sm" name="service_bpjs_id" id="service_bpjs_id" value="<?= @$main['service_bpjs_id'] ?>" required>
                <?php if ($id != null) : ?>
                  <input type="hidden" class="form-control form-control-sm" name="old" id="old" value="<?= @$main['service_bpjs_id'] ?>" required>
                <?php endif; ?>
                <h4>Config Vclaim</h4>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Rumah Sakit <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="rs_name" id="rs_name" value="<?= @$main['rs_name'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Kode PPK <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="kode_ppk" id="kode_ppk" value="<?= @$main['kode_ppk'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Cons ID Vclaim <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="cons_id" id="cons_id" value="<?= @$main['cons_id'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Secret key Vclaim <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="secret_key" id="secret_key" value="<?= @$main['secret_key'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">User Key Vclaim <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="user_key" id="user_key" value="<?= @$main['user_key'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Base URL Vclaim <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="base_url" id="base_url" value="<?= @$main['base_url'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Service Name Vclaim <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?= @$main['service_name'] ?>" required>
                  </div>
                </div>
                <hr>
                <h4>Config Aplicare</h4>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Kode PPK</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_kode_ppk" id="aplicare_kode_ppk" value="<?= @$main['aplicare_kode_ppk'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Cons ID Aplicare</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_cons_id" id="aplicare_cons_id" value="<?= @$main['aplicare_cons_id'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Secret key Aplicare</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_secret_key" id="aplicare_secret_key" value="<?= @$main['aplicare_secret_key'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">User Key Aplicare</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_user_key" id="aplicare_user_key" value="<?= @$main['aplicare_user_key'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Base URL Aplicare</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_base_url" id="aplicare_base_url" value="<?= @$main['aplicare_base_url'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Service Name Aplicare</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="aplicare_service_name" id="aplicare_service_name" value="<?= @$main['aplicare_service_name'] ?>">
                  </div>
                </div>
                <hr>
                <h4>Config Antrean</h4>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Cons ID Antrean <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="cons_id_antrean" id="cons_id_antrean" value="<?= @$main['cons_id_antrean'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Secret key Antrean <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="secret_key_antrean" id="secret_key_antrean" value="<?= @$main['secret_key_antrean'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">User Key Antrean <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="user_key_antrean" id="user_key_antrean" value="<?= @$main['user_key_antrean'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Base URL Antrean <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="base_url_antrean" id="base_url_antrean" value="<?= @$main['base_url_antrean'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Service Name Antrean <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="service_name_antrean" id="service_name_antrean" value="<?= @$main['service_name_antrean'] ?>" required>
                  </div>
                </div>
                <h4>Config Apotek</h4>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Kode PPK Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="kode_ppk_apotek" id="kode_ppk_apotek" value="<?= @$main['kode_ppk_apotek'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Cons ID Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="cons_id_apotek" id="cons_id_apotek" value="<?= @$main['cons_id_apotek'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Secret key Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="secret_key_apotek" id="secret_key_apotek" value="<?= @$main['secret_key_apotek'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">User Key Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="user_key_apotek" id="user_key_apotek" value="<?= @$main['user_key_apotek'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Base URL Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="base_url_apotek" id="base_url_apotek" value="<?= @$main['base_url_apotek'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Service Name Apotek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="service_name_apotek" id="service_name_apotek" value="<?= @$main['service_name_apotek'] ?>">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-10 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-primary btn-submit"><i class="fas fa-save"></i> Simpan</button>
                    <a class="btn btn-sm btn-default btn-cancel" href="<?= site_url() . '/' . $menu['controller'] . '/' . $menu['url'] ?>"><i class="fas fa-times"></i> Batal</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  $(document).ready(function() {
    $("#form").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        error.addClass("invalid-feedback");
        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.next("label"));
        } else if ($(element).hasClass('select2')) {
          error.insertAfter(element.next(".select2-container")).addClass('mt-1');
        } else {
          error.insertAfter(element);
        }
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).addClass("is-valid").removeClass("is-invalid");
      },
      submitHandler: function(form) {
        $(".btn-submit").html('<i class="fas fa-spin fa-spinner"></i> Proses');
        $(".btn-submit").addClass('disabled');
        $(".btn-cancel").addClass('disabled');
        form.submit();
      }
    });
  })
</script>