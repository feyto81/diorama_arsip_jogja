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
            <form id="form" action="<?= site_url() . '/' . $menu['controller'] . '/save/' . $id ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="card-body">
                <div class="flash-error" data-flasherror="<?= $this->session->flashdata('flash_error') ?>"></div>
                <input type="hidden" class="form-control form-control-sm" name="galeri_id" id="galeri_id" value="<?= @$main['galeri_id'] ?>" required>
                <?php if ($id != null) : ?>
                  <input type="hidden" class="form-control form-control-sm" name="old" id="old" value="<?= @$main['galeri_id'] ?>" required>
                <?php endif; ?>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Judul Galeri <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="galeri_title" id="galeri_title" value="<?= @$main['galeri_title'] ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Tgl Upload <span class="text-danger">*</span></label>
                  <div class="col-sm-2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm datetimepicker" name="galeri_date" id="galeri_date" value="<?= (@$main['galeri_date'] != '') ? to_date(@$main['galeri_date'], '', 'full_date') : date('d-m-Y H:i:s') ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Berita Gambar</label>
                  <div class="col-sm-3">
                    <input type="file" class="" name="galeri_image" id="galeri_image">
                    <input type="hidden" name="old_galeri_image" id="old_galeri_image" value="<?= @$main['galeri_image'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right"></label>
                  <div class="col-sm-2">
                    <img src="<?= base_url() ?>images/galeri/<?= @$main['galeri_image'] ?>" alt="<?= @$main['galeri_image'] ?>" class="img-thumbnail">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="url" class="col-sm-2 col-form-label text-right">Aktif</label>
                  <div class="col-sm-3">
                    <div class="pretty p-icon">
                      <input class="icheckbox" type="checkbox" name="active_st" id="active_st" value="1" <?php if (@$main) {
                                                                                                            echo (@$main['active_st'] == 1) ? 'checked' : '';
                                                                                                          } else {
                                                                                                            echo 'checked';
                                                                                                          } ?>>
                      <div class="state">
                        <i class="icon fas fa-check"></i><label></label>
                      </div>
                    </div>
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
      rules: {},
      messages: {},
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