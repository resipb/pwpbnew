<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-guru.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_guru WHERE id=$id";
$query = mysqli_query($db, $sql);
$guru = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>DATA GURU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3 align="center">Formulir Pendaftaran</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <center>
        <fieldset>
        <table>
        <tr>
            <td>Id: </td>
            <td><input type="text" name="id" placeholder="Id Guru" autofocus/></td>
        </tr>
        <tr>
            <td>Nama: </td>
            <td><input type="text" name="nama" placeholder="nama"/></td>
        </tr>
        <tr>
            <td>Kode Guru: </td>
            <td><input type="text" name="kode_guru" placeholder="kode_guru"/></td>
        </tr>
        <tr>
            <td>Guru Mapel: </td>
            <td><input type="text" name="guru_mapel" placeholder="guru_mapel"/></td>
        </tr>
        <tr>
            <td>Alamat: </td>
            <td><input type="text" name="alamat" placeholder="alamat"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan" name="Simpan"/></td>
        </tr>
       </table>
        </fieldset>

    </form>

    </body>
</html>