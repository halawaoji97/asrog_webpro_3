<!DOCTYPE html>
<html>

<head>
  <title><?= $judul; ?></title>
</head>

<body>
  <style type="text/css">
    .table-data {
      width: 100%;
      border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      font-family: Verdana;
      padding: 10px 10px 10px 10px;
    }

    h3 {
      font-family: Verdana;
    }
  </style>
  <h3>
    <center>Laporan Bukti Booking Perputakaan Online</center>
  </h3>
  <br />
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
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>