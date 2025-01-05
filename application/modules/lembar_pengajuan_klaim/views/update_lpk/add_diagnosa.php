<div class="form-group row">
  <label for="menu" class="col-sm-4 col-form-label text-right">Kode Diagnosa</label>
  <div class="col-sm-7">
    <input type="text" class="form-control form-control-sm" name="kode_diagnosa_<?= $diagnosa_no ?>" value="">
    <small>Kode Diagnosa => Data di menu Referensi -> Diagnosa</small>
  </div>
</div>
<div class="form-group row">
  <label for="menu" class="col-sm-4 col-form-label text-right">Level</label>
  <div class="col-sm-4">
    <select class="form-control form-control-sm select2-hidden-js" name="level_diagnosa_<?= $diagnosa_no ?>">
      <option value="">- Pilih -</option>
      <option value="1">Primer</option>
      <option value="2">Sekunder</option>
    </select>
  </div>
</div>

<script>
  $(document).ready(function() {
    //select2
    $.fn.select2.defaults.set("theme", "bootstrap");
    $('.select2-hidden-js').select2({
      minimumResultsForSearch: Infinity
    });
  });
</script>