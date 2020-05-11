<?php

require '../php/functions.php';

$tubes_193040057 = cari($_GET['keyword']);
?>

<table class="table">
  <tr class="text-light" style="background-color: orange;">
    <th>NO</th>
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Asal</th>
    <th>Jenis</th>
    <th>Harga</th>
  </tr>
  <?php if (empty($tubes_193040057)) : ?>
    <tr>
      <td colspan="7">
        <h1>Data tidak ditemukan</h1>
      </td>
    </tr>
  <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($tubes_193040057 as $tubes) : ?>
      <tr>
        <td><?= $i ?></td>
        <td>
          <a href="ubah.php?id=<?= $tubes['id']; ?>" class="text-light"><button type="button" class="update btn btn-primary">Ubah</button></a>
          <a href="hapus.php?id=<?= $tubes['id']; ?>" onclick="return confirm('Hapus Data??')" class="text-light"><button type="button" class="delete btn btn-danger">Hapus</button></a>
        </td>
        <td>
          <img src="../assets/img/<?= $tubes['gambar'] ?>" style="height: 100px; width: 100px;">
        </td>
        <td><?= $tubes['nama'] ?></td>
        <td><?= $tubes['asal'] ?></td>
        <td><?= $tubes['jenis'] ?></td>
        <td><?= $tubes['harga'] ?></td>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>
  <?php endif; ?>
</table>