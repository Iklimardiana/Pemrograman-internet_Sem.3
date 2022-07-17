<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan</title>
</head>
<body>
    <fieldset>
        <legend><h3>Tambah Data</h3></legend>
        <form method ="post" action="data.php">
            Nama Tanaman : <input type="text" name="nama_tanaman"/><br/><br>
            Hasil panen : <input type="number" name="hasil_panen"/><br/><br>
            Lama tanam : <input type="number" name="lama_tanam"/><br/><br>
            Tanggal Panen : <input type="date" name="tanggal_panen"/><br/><br>
            <input type="submit" value="Simpan"/>
            <input type="reset" value="Bersihkan"/>
        </form>
    </fieldset>
    <fieldset>
            <legend><h3>Lihat Data</h3></legend>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Nama Tanaman</td>
                    <td>Hasil Panen (Kg)</td>
                    <td>Lama Tanam (Bulan)</td>
                    <td>Tanggal Panen</td>
                    <td colspan="2">Action</td>
                </tr>
        <?php
            include "koneksi.php";
            $query =mysqli_query($conn, "SELECT * FROM menanam");
            while ($data = mysqli_fetch_array($query)){
            echo "<tr> <td>".$data['id']."</td><td>".$data['nama_tanaman']."</td><td>".$data['hasil_panen']."</td>
                <td>".$data['lama_tanam']."</td><td>".$data['tanggal_panen']."</td>";
            echo "<td><a href = 'updateInput.php?id=".$data['id']."'> Update</a></td>";
            echo "<td><a href = 'delete.php?id=".$data['id']."'> Del</a></td></tr>";
            }
        ?>
    </fieldset>
</body>
</html>