<?php 
require 'Pegawai.php';

// ciptakan object
$asepsahrudin = new Pegawai('242424', 'Asep Sahrudin', 'Manager', 'Islam', 'Menikah');
$alfian = new Pegawai('242424', 'Alfian', 'Asmen', 'Islam', 'Lajang');
$andreas = new Pegawai('242424', 'Andreas', 'Kabag', 'Kristen', 'Menikah');
$superman = new Pegawai('242424', 'Superman', 'Kabag', 'Hindu', 'Lajang');
$sandika = new Pegawai('242424', 'Sandika', 'Staff', 'Islam', 'Lajang');
$asepsahrudin->mencetak();
$alfian->mencetak();
$andreas->mencetak();
$superman->mencetak();
$sandika->mencetak();
echo '<br />Jumlah Pegawai: '.Pegawai::$total;
?>