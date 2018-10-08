<?php

include("db.php");
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$sql= mysqli_query("SELECT * FROM nama WHERE nama='$nama' && nim='$nim' ");
	$num=mysqli_num_rows($sql);
	if ($num==1) {
		session_start();
		$_SESSION['nama']=$nama;
		?><script language="javascript">alert('berhasil'); document location='prosess.php';</script>
		<?php
	}else{
		?><script language="javascript">alert('gagal'); document location='form.html';</script>
		<?php
	}