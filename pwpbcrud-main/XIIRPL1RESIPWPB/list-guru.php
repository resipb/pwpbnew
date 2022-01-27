<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA GURU</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <header>
        <h3 align="center">GURU YANG SUDAH TERDAFTAR</h3>
    </header>

    <center>
    <fieldset>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kode_guru</th>
            <th>Guru_mapel</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    </fieldset>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_guru";
        $query = mysqli_query($db, $sql);

        while($guru = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$guru['id']."</td>";
            echo "<td>".$guru['nama']."</td>";
            echo "<td>".$guru['kode_guru']."</td>";
            echo "<td>".$guru['guru_mapel']."</td>";
            echo "<td>".$guru['alamat']."</td>";
            
            echo "<td>";
            echo "<a href='form-edit.php?id=".$guru['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$guru['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>