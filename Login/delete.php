
<?php 
include "koneksi.php";
$id=$_GET['id'];
$delete=$konek -> query("delete from input where no='$id'") ;

?>
<script>
    document.location.href='tampil.php';
    </script>
 
                    