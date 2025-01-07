<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><i class="<?= @$menu['icon'] ?>"></i> <?= @$menu['menu_name'] ?></h1>
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
              <h3 class="card-title">Form <?= $menu['menu_name'] ?></h3>
            </div>
            <form id="form" action="<?= site_url() . '/' . $menu['controller'] . '/save/' ?>" enctype="multipart/form-data" method="post" autocomplete="off">
              <div class="card-body">
                <div class="flash-error" data-flasherror="<?= $this->session->flashdata('flash_error') ?>"></div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Judul <span class="text-danger">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" name="title" id="title" value="<?= @$main['title'] ?>" required>
                    <input type="hidden" class="form-control form-control-sm" name="sejarah_id" id="sejarah_id" value="<?= @$main['sejarah_id'] ?>">

                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu" class="col-sm-2 col-form-label text-right">Konten <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <textarea id="compose-textarea" class="form-control" name="content" style="height: 600px"><?= @$main['content'] ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="url" class="col-sm-2 col-form-label text-right">Gambar <span class="text-danger">*</span></label>
                  <div class="col-sm-4 ">
                    <input type="file" class="" name="image_thumbnail" id="image_thumbnail">
                    <input type="hidden" class="" name="old_image_thumbnail" id="old_image_thumbnail" value="<?= @$main['image_thumbnail'] ?>">
                    <br>
                    <img src="<?= base_url() ?>images/sejarah/<?= @$main['image_thumbnail'] ?>" class="img-thumbnail mt-3 mb-3" style="max-height:150px" alt="User Image">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-10 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-primary btn-submit"><i class="fas fa-save"></i> Simpan</button>
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
      rules: {

      },
      messages: {

      },
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