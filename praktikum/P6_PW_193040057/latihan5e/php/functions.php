<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040057") or die("Database salah");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

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
    $nama =  htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $jenis = htmlspecialchars($data['jenis']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO
            makanan
            VALUES
            (NULL,'$gambar','$nama','$asal','$jenis','$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama =  htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $jenis = htmlspecialchars($data['jenis']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE 
            makanan
            SET
            gambar = '$gambar',
            nama = '$nama',
            asal = '$asal',
            jenis = '$jenis',
            harga = '$harga'
            WHERE id = '$id'";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM makanan 
                    WHERE 
                    gambar LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    asal LIKE '%$keyword%' OR
                    jenis LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'
                    ";
    return query($query);
}
