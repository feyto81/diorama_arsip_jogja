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
          url: "<?= site_url() . '/' . $menu['controller'] . '/update_lpk/process' ?>",
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

    $('#tglKontrol').val('');

    // Diagnosa
    add_diagnosa('0');
    $('#add_diagnosa').bind('click', function(e) {
      e.preventDefault();
      var no = $('#diagnosa_no').val();
      add_diagnosa(no);
    });

    // Procedure
    add_procedure('0');
    $('#add_procedure').bind('click', function(e) {
      e.preventDefault();
      var no = $('#procedure_no').val();
      add_procedure(no);
    });
  });

  function add_diagnosa(no) {
    $('#box-loading-diagnosa').html('<div class="text-center mt-3"><i class="fas fa-spin fa-spinner fa-2x"></i></div>');
    $(".btn-add-diagnosa").html('Loading <i class="fas fa-spin fa-spinner"></i>');
    $(".btn-add-diagnosa").addClass('disabled');
    $.post('<?= site_url() . '/' . $menu['controller'] . '/update_lpk/ajax/add_diagnosa' ?>', {
      diagnosa_no: no
    }, function(data) {
      $(".btn-add-diagnosa").html('<i class="fa fa-plus"></i> Tambah Diagnosa');
      $(".btn-add-diagnosa").removeClass('disabled');
      $('#box-loading-diagnosa').html('');
      $('#box-diagnosa').append(data.html);
      $('#diagnosa_no').val(data.diagnosa_no);
    }, 'json');
  }

  function add_procedure(no) {
    $('#box-loading-procedure').html('<div class="text-center mt-3"><i class="fas fa-spin fa-spinner fa-2x"></i></div>');
    $(".btn-add-procedure").html('Loading <i class="fas fa-spin fa-spinner"></i>');
    $(".btn-add-procedure").addClass('disabled');
    $.post('<?= site_url() . '/' . $menu['controller'] . '/update_lpk/ajax/add_procedure' ?>', {
      procedure_no: no
    }, function(data) {
      $(".btn-add-procedure").html('<i class="fa fa-plus"></i> Tambah Procedure');
      $(".btn-add-procedure").removeClass('disabled');
      $('#box-loading-procedure').html('');
      $('#box-procedure').append(data.html);
      $('#procedure_no').val(data.procedure_no);
    }, 'json');
  }
</script>