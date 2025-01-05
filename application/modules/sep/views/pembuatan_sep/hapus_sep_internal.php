<script type="text/javascript">
  var form_submit;
  $(document).ready(function() {
    var form_submit = $("#form_submit").validate({
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
        $('#json-renderer').html('Loading <i class="fas fa-spin fa-spinner"></i>');
        //
        $.ajax({
          type: "POST",
          url: "<?= site_url() . '/' . $menu['controller'] . '/hapus_sep_internal/process' ?>",
          data: $(form).serialize(),
          success: function(data) {
            $(".btn-submit").html('<i class="fas fa-paper-plane"></i> Proses');
            $(".btn-submit").removeClass('disabled');
            $(".btn-cancel").removeClass('disabled');
            //
            var input = eval('(' + data + ')');
            var options = {
              collapsed: false,
              rootCollapsable: true,
              withQuotes: true,
              withLinks: true
            };
            $('#json-renderer').jsonViewer(input, options);
          },
          error: function(data) {
            $(".btn-submit").html('<i class="fas fa-paper-plane"></i> Proses');
            $(".btn-submit").removeClass('disabled');
            $(".btn-cancel").removeClass('disabled');
            $('#json-renderer').html('Error');
          }
        });
        return false;
      }
    });

    $('#tglKejadian').val('');
  })
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="row pl-2">
            <a href="<?= site_url() . '/' . @$menu['controller'] . '/' . @$menu['url'] ?>" class="btn btn-primary btn-xs text-white mr-2"><i class="fas fa-arrow-left"></i> Back</a>
            <h1 class="m-0 text-dark">Hapus SEP Internal</h1>
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
                    <h5 class="mb-4 mt-n2">Form Input Parameter</h5>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSep" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Nomor Surat <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="noSurat" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Tgl Rujukan Internal <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm datepicker" name="tglRujukanInternal" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">Kode Poli Tujuan <span class="text-danger">*</span></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="kdPoliTuj" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="menu" class="col-sm-4 col-form-label text-right">User Pengguna SEP <span class="text-danger">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" name="user" value="Coba Ws" required>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <h5 class="mb-4 mt-n2">Contoh Data Input Parameter</h5>
                    <div class="form-group row mt-n2">
                      <label for="menu" class="col-sm-12 col-form-label text-left">Nomor SEP</label>
                      <ul class="col-sm-12 ml-4">
                        <li>-</li>
                      </ul>
                    </div>
                    <div class="form-group row mt-n2">
                      <label for="menu" class="col-sm-12 col-form-label text-left">Nomor SEP</label>
                      <ul class="col-sm-12 ml-4">
                        <li>-</li>
                      </ul>
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