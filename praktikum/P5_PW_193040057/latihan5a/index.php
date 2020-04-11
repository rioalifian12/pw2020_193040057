<?php 
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040057") or die ("Database salah");
    $result = mysqli_query($conn, "SELECT * FROM makanan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table cellpadding = "10"; cellspacing= "1"; border = "1"> 
         <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i?></td>
                    <td><?= $row["gambar"]?></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["asal"]?></td>
                    <td><?= $row["jenis"]?></td>
                    <td><?= $row["harga"]?></td>
                </tr>
        <?php $i++ ?>
        <?php endwhile ?>
     </table>
     </div>
</body>
</html> 