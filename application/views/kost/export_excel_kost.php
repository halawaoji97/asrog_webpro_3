<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<h3>
  <center>
    Laporan Data Kost<center>
</h3>
<br>
<table class="table-data">
  <thead>
    <tr>
      <th>No</th>
      <th>Location</th>
      <th>Room Size</th>
      <th>Total Room</th>
      <th>Price</th>
      <th>Empty Room</th>
      <th>Filled Room</th>
      <th>Facility</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($kost as $k) {

    ?>
      <tr>
        <th scope="row">
          <?= $no++; ?>
        </th>
        <td><?= $k['location']; ?></td>
        <td><?= $k['room_size']; ?></td>
        <td><?= $k['room_qty']; ?></td>
        <td><?= $k['price']; ?></td>
        <td><?= $k['empty']; ?></td>
        <td><?= $k['filled']; ?></td>
        <td><?= $k['facility']; ?></td>
        <td><?= $k['full_address']; ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>