<?php
include "koneksi.php";
include "boot.php";
$id=$_GET['id'];

$tampil=$konek->query("select * from input where no='$id'");

$a=$tampil -> fetch_array();

?>
<br><br><br>
<div class="container mt-2"> 
        <div class="row">
            <div class="col col-4">


            
    <form action=""method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">kode</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" value="<?php echo $a['kode'] ?> ">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="nama"  value="<?php echo $a['nama'] ?> ">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">barang</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="barang"  value="<?php echo $a['barang'] ?> ">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">kerusakan</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="kerusakan"  value="<?php echo $a['kerusakan'] ?> ">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">komponen</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="komponen"  value="<?php echo $a['komponen'] ?> ">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tanggal</label>
    <input type="date" class="form-control" id="exampleInputPassword1 "name="tanggal"  value="<?php echo $a['tanggal'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">harga</label>
    <input type="text" class="form-control" id="exampleInputPassword1 "name="harga"  value="<?php echo $a['harga'] ?> ">
  </div>

  <button type="submit" class="btn btn-success" name="edit">Simpan</button>
</form>
</div>
</div>

<?php
if( isset ($_POST['edit'])) {
  
  

$edit= $konek-> query("update input set kode='$_POST[kode]',nama='$_POST[nama]',barang='$_POST[barang]',kerusakan='$_POST[kerusakan]',komponen='$_POST[komponen]',tanggal='$_POST[tanggal]',harga='$_POST[harga]' where no ='$id'");

?>
<script>
  document.location.href='tampil.php';
</script>
<?php
}
?>