<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode_guru = $_POST['kode_guru'];
    $guru_mapel = $_POST['guru_mapel'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE data_guru SET id='$id', nama='$nama', kode_guru='$kode_guru', guru_mapel='$guru_mapel', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-guru.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>