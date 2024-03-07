<?php 
include "boot.php"
?>
<!-- form input -->
<br><br>
<div class="col col-12">
  <br>

  <div class="card">
  <div class="card-body">
    <h5 class="card-title">INPUT SERVICE KOMPUTER DAN SPARE PART</h5>
    <div class="" style="margin-left:400;">
    <form action="input2.php" method="post">
  <div class="container mt-5 col-9"> 
     
  <div class="mb-5">
    <label for="">kode</label>
    <input type="number" name="kode" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">nama</label>
    <input type="text" name="nama"  class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Barang</label>
    <input type="text" name="barang" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Kerusakan</label>
    <input type="text" name="kerusakan" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Komponen</label>
    <input type="text" name="komponen" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Tanggal Service</label>
    <input type="date" name="tanggal" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Harga</label>
    <input type="text" name="harga" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required="">
  </div>
  <div class="form-group">
	            	<button type="submit" name="simpan" class="btn form-control btn-success bg-success rounded submit px-3">TAMBAH</button>
	            </div>
</form>
  </div>
</div>
</div>


  


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</div>