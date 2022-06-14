<style>
h1 {
  color:#c00;
  font-family:sans-serif;
  font-size:2em;
  margin-bottom: 0;
}

table, th,td {
    font-family: sans-serif;
    padding:.25em .5em;
    text-align: left;
    text-align: center;
    display: nth-child(2)
}
</style>
<h1>Invoice</h1>
<div class="table-responsive">
    <table border=1>
    <thead>
    <tr>
        <th class="header">Nama</th>
        <th class="header">Nama Kost</th>
        <th class="header">Tanggal Booking</th>
        <th class="header">Total</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?= $user['name']; ?>
            </td>
            <td><?= $user['kost']; ?></td>
            <td><?= $user['startDate']; ?></td>
            <td><?= $user['price']; ?></td>
        </tr>
    </tbody>
        </table>
</div>
</d>