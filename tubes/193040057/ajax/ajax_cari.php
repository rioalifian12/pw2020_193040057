<?php

require '../php/functions.php';

$tubes_193040057 = cari($_GET['keyword']);
?>

<table class="table">
  <tr class="text-light" style="background-color: orange;">
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($tubes_193040057)) : ?>
    <tr>
      <td colspan="4">
        <h1>Data tidak ditemukan</h1>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($tubes_193040057 as $tubes) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="../assets/img/<?= $tubes['gambar']; ?>" style=" height: 100px; width: 100px;"></td>
      <td><?= $tubes['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $tubes['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>