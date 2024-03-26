<?php

$carikode = mysqli_query($koneksi, "SELECT id_member from tb_member order by id_member desc");
$datakode = mysqli_fetch_array($carikode);
$kode = $datakode['id_member'];
$urut = substr($kode, 1, 3);
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1) {
    $format = "A"."00".$tambah;
}else if (strlen($tambah) == 2) {
    $format = "A".$tambah;
} else (strlen($tambah) == 3) {
    $format = "A".$tambah
}
?>