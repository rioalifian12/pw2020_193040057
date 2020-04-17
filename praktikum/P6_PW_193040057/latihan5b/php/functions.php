<?php 
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040057") or die ("Database salah");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $jenis = htmlspecialchars($data['jenis']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO makanan
                VALUES
                ('', '$gambar', '$nama'; '$asal'; '$jenis'; '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?> 