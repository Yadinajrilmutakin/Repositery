
<?php
include "boot.php";

?>
<br><br><br><br>
<body style="background-size:cover" background="">
<form action=""method="get">
<div class="input-group">
  <input type="date" aria-label="First name" name="awal" class="form-control">
  <input type="date" aria-label="Last name" name="akhir" class="form-control">
  <span class="input-group-text"><button type="submit"><i class="bi bi-search"></i></button></span>
  <button class="btn" onclick="printDiv('print')" type="submit"><i class="bi bi-printer"></i></button>
</div>
</form>

<fieldset id="print"> 
    <thead>
      <br><br><br>
      <table class="table table-bordered border-primary">
    <tr>
        <th scope="col">no</th>
        <th scope="col">kode</th>
        <th scope="col">nama</th>
        <th scope="col">barang</th>
        <th scope="col">kerusakan</th>
        <th scope="col">komonen</th>
        <th scope="col">tanggal</th>
        <th scope="col">harga</th>

    </tr>
    </thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){
      $tampil=$konek->query("select * from input");
      while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['kode'] ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['barang'] ?></td>
            <td><?php echo $a['kerusakan'] ?></td>
            <td><?php echo $a['komponen'] ?></td>
            <td><?php echo $a['tanggal'] ?></td>
            <td><?php echo $a['harga'] ?></td>
        <?php
    }
  }else{

    $tampil=$konek->query("select * from input where tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['kode'] ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['barang'] ?></td>
            <td><?php echo $a['kerusakan'] ?></td>
            <td><?php echo $a['komponen'] ?></td>
            <td><?php echo $a['tanggal'] ?></td>
            <td><?php echo $a['harga'] ?></td>
        <?php
    }
  }
    ?>
</tr>
  </table>
</fieldset>
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
</table>