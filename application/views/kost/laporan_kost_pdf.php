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
<h1>Daftar Data Kost</h1>
<div class="table-responsive">
  <table border=1>
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
</div>
</d>