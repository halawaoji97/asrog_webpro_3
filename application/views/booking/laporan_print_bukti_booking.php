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
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>