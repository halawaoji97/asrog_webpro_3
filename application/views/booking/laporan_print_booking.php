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
    <center>Laporan Data Booking Terbaru</center>
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
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>