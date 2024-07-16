<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'jwd2024');
$databuku = mysqli_query($koneksi, "SELECT * FROM databuku");
?>``