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
    <center>Laporan Data Kost</center>
  </h3>
  <br />
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
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>