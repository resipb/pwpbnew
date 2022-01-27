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

    <form action="proses-pendaftaran.php" method="POST">

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
            <textarea><input type="text" name="alamat" placeholder="alamat"/></textarea>
        </tr>
        <tr>
            <td><input type="submit" value="Daftar" name="daftar"/></td>
        </tr>
       </table>
        </fieldset>

    </form>

    </body>
</html>