<?php
include"../Common.php";
include"../Mydb.php";
include"../Fungsi_Tgl.php";
$sql = myquery("SELECT * FROM berita ORDER BY id_berita DESC limit 5");
$result = array();
while($row = mysql_fetch_array($sql)){
    $isi = substr($row[10],0,255); 
    $isi = substr($row[10],0,strrpos($isi," ")); 
    $fotobrt = "<img src='".$imgberita."/".$row[15]."' />";
    $tgl_ayo = tgl_indo($row[13]);
    array_push($result, array(
            'id_berita' => $row[0],
            'judul' => $row[3],
            'gambar' => $fotobrt,
            'tgl' => $tgl_ayo,        
            'isi_berita' => $isi));
}
echo json_encode(array("result" => $result));
?>