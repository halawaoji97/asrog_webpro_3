<style>
  h1 {
    color: #c00;
    font-family: sans-serif;
    font-size: 2em;
    margin: 20px 0;
  }

  table,
  th,
  td {
    font-family: sans-serif;
    padding: .25em .5em;
    text-align: left;
    text-align: center;
    display: nth-child(2)
  }
</style>
<h1>Daftar Data Booking Terbaru</h1>
<div class="table-responsive">
  <table border=1>
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
          <td><?= $t['status']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
</d>