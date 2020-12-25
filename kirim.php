<?php
if($_POST['kirim']){
	$admin = 'tendaberkah@protonmail.com'; 
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$pesan	= htmlentities($_POST['pesan']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>
