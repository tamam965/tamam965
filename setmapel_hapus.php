<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysqli_query($GLOBALS["___mysqli_ston"], "delete from tb_mengajar where id_mengajar = '$kode'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=setmapel";
</script>