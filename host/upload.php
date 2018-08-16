<?php
$sayi=uniqid(rand()*100000000000000000000);
$uploaddir = $_SERVER['DOCUMENT_ROOT']."/image";
$uploadfile = $uploaddir . $sayi . basename($_FILES['doc']['name']);
move_uploaded_file($_FILES['doc']['tmp_name'], $uploadfile.".png");

?>