<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<h3>
  <center>
    Laporan Data Member<center>
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
      <th>Status Booking</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($user as $u) {

    ?>
      <tr>
        <th scope="row">
          <?= $no++; ?>
        </th>
        <td><?= $u['name']; ?></td>
        <td><?= $u['telp']; ?></td>
        <td><?= $u['email']; ?></td>
        <td><?= $u['address']; ?></td>
        <td><?= $u['kost']; ?></td>
        <td><?= $u['kost_location']; ?></td>
        <td><?= $u['price']; ?></td>
        <td><?= $u['startDate']; ?></td>
        <td><?= $u['status_booking']; ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>