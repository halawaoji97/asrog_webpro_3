<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<h3>
  <center>
    Laporan Bukti Booking Kost<center>
</h3>
<br>
<table class="table-data">
  <thead>
    <tr>
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
    <tr>
      <td><?= $user['name']; ?></td>
      <td><?= $user['telp']; ?></td>
      <td><?= $user['email']; ?></td>
      <td><?= $user['address']; ?></td>
      <td><?= $user['kost']; ?></td>
      <td><?= $user['kost_location']; ?></td>
      <td><?= $user['price']; ?></td>
      <td><?= $user['startDate']; ?></td>
      <td><?= $user['status_booking']; ?></td>
    </tr>
  </tbody>
</table>