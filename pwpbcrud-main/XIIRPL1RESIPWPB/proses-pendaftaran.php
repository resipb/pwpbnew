<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode_guru = $_POST['kode_guru'];
    $guru_mapel = $_POST['guru_mapel'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO data_guru (id, nama, kode_guru, guru_mapel, alamat) VALUE ('$id', '$nama', '$kode_guru', '$guru_mapel', '$alamat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>