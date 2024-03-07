<?php
include "boot.php"
?>
<div class="container">
<br><br><br>
<label for="" class="fs-1"><B>DAFTAR SERVICE</B></label>
<table class="table table-bordered border-primary">
<tr>
  <td>no</td>
  <td>kode</td>
  <td>nama</td>
  <td>barang</td>
  <td>kerusakan</td>
  <td>komponen</td>
  <td>tanggal</td>
  <td>harga</td>
  <td>edit & hapus</td>
</tr>

</div>
<!-- proses tampil dari data base -->
<?php 
include "koneksi.php";

$tampil = $konek -> query ("select * from input order by no desc");
while ($a=$tampil -> fetch_array()){


@$no++;

    // echo
    // "<tr>
    // <td>$no</td></td> 
    // <td>$a[kode]</td>
    // <td>$a[nama]</td>
    // <td>$a[barang]</td>
    // <td>$a[kerusakan]</td>
    // <td>$a[komponen]</td>
    // <td>$a[tanggal]</td>
    // <td>$a[harga]</td> ";


?>

<tr>
  <td><?php echo $no; ?></td>
  <td><?php echo $a['kode'] ?></td>
  <td><?php echo $a['nama'] ?></td>
  <td><?php echo $a['barang'] ?></td>
  <td><?php echo $a['kerusakan'] ?></td>
  <td><?php echo $a['komponen'] ?></td>
  <td><?php echo $a['tanggal'] ?></td>
  <td><?php echo $a['harga'] ?></td>
<!-- tombol edit dan delate -->
<td>
<a href ="edit.php?id=<?php echo $a['no'] ?>"><button class="btn bg-info-subtle text-dark"><i class="bi bi-pencil"></i></button></a>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $a['no'] ?>" data-toggle="Delete" data-placement="right" title="delete data">
            <i class="bi bi-trash"></i></button>
            <br>
            <div class="modal fade" id="exampleModal<?php echo $a['no'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body text-center">
                  <h1 class="modal-title fs-3 py-3" id="exampleModalLabel">Yakin Mau Hapus Data Ini?</h1>
                  </div>
                  <div class="modal-footer">
                  <a href="delete.php?id=<?php echo $a['no'] ?>"><button type="button" class="btn btn-outline-danger">Oke</button></a>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<?php

}
?>
<!-- tombol Kembali -->
<br>
  <tr>
<a href="input.php" class="btn btn-success btn-lg">Kembali</a>
</div>
</tr>
</tr>
</table>

