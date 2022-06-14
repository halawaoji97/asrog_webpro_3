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
<h1>Daftar Member</h1>
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
</div>
</d>