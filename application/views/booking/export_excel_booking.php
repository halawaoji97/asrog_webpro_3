<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<h3>
  <center>
    Laporan Data Booking Terbaru<center>
</h3>
<br>
<table class="table-data">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Address</th>
      <th>Kost</th>
      <th>Kost Location</th>
      <th>Price</th>
      <th>Start Date</th>
      <th>Status Payment</th>
      <th>Status Booking</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($transaksi as $t) {

    ?>
      <tr>
        <th scope="row">
          <?= $no++; ?>
        </th>
        <td><?= $t['name']; ?></td>
        <td><?= $t['telp']; ?></td>
        <td><?= $t['email']; ?></td>
        <td><?= $t['address']; ?></td>
        <td><?= $t['kost']; ?></td>
        <td><?= $t['kost_location']; ?></td>
        <td><?= $t['price']; ?></td>
        <td><?= $t['start_date']; ?></td>
        <td>
          <?php if ($t['payment_image'] !== '') : ?>
            <span class="badge badge-danger">Paid</span>
          <?php else : ?>
            <span class="badge badge-success">Unpaid</span>
          <?php endif; ?>
        </td>
        <td><?= $t['status']; ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>