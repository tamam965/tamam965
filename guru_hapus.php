<?php
include "koneksi.php";
$kode = @$_GET['id'];
$a=mysqli_query($GLOBALS["___mysqli_ston"], "select nip from tb_guru where id_guru = '$kode'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
$b=mysqli_fetch_array($a);

mysqli_query($GLOBALS["___mysqli_ston"], "delete from tb_pengguna where username=$b[nip]") or die (mysqli_error($GLOBALS["___mysqli_ston"]));

mysqli_query($GLOBALS["___mysqli_ston"], "delete from tb_guru where id_guru = '$kode'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatguru";
</script>