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
          url: "<?= site_url() . '/' . $menu['controller'] . '/aproval/process' ?>",
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