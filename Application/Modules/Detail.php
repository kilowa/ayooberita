<?php 
include"../Common.php";
include"../Mydb.php";
include"../Fungsi_Tgl.php";
$q=$_GET['q'];
$result = array();
$row = myfetch("SELECT * FROM berita WHERE id_berita='1'");
array_push($result, array(
            'id_berita' => $row[0],
            'judul' => $row[3],
            'gambar' => $fotobrt,
            'tgl' => $tgl_ayo,        
            'isi_berita' => $isi));
echo json_encode(array("result" => $result));
?>