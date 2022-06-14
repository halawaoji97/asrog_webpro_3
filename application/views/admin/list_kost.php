<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard"><?= $title; ?></span>
        </div>
    </nav>
    <div class="home-content">
        <div class="action-admin">
            <a href="<?= base_url('admin/addKost'); ?>" class="add"><i class='bx bx-home-heart'></i></a>
        </div>

        <div class="overview-boxes member list-kost">
            <?php foreach ($kost as $k) : ?>
                <div class="box">
                    <div class="card-user">
                        <div class="picture-profile">
                            <img src="<?= base_url('assets/images/') . $k['image_primary']; ?>" alt="<?= $k['location']; ?>">
                        </div>
                        <div class="right-side">
                            <h3 class="user-name"><?= $k['location']; ?></h3>
                            <div class="indicator">
                                <span class="text"><?= $k['full_address']; ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <div class="table-payment">
            <div class="box">
                <div class="action" style="display: flex; ">
                    <a href="<?= base_url('laporan/cetak_laporan_kost'); ?>" class="btn-print" title="Print">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="<?= base_url('laporan/laporan_kost_pdf'); ?>" class="btn-pdf" title="PDF">
                        <i class='bx bxs-file-pdf'></i>
                    </a>
                    <a href="<?= base_url('laporan/export_excel_kost'); ?>" class="btn-excel" title="Excel">
                        <i class='bx bx-receipt'></i>
                    </a>
                </div>
                <div class="title">List Kost</div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Location</th>
                            <th scope="col">Room Size</th>
                            <th scope="col">Total Room</th>
                            <th scope="col">Price</th>
                            <th scope="col">Empty Room</th>
                            <th scope="col">Filled Room</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kost as $k) : ?>
                            <tr>
                                <td data-label="Location"><?= $k['location']; ?></td>
                                <td data-label="Room Size"><?= $k['room_size']; ?></td>
                                <td data-label="Total Room"><?= $k['room_qty']; ?></td>
                                <td data-label="Facility"><?= $k['price']; ?></td>
                                <td data-label="Empty Room"><?= $k['empty']; ?></td>
                                <td data-label="Filled Room"><?= $k['filled']; ?></td>
                                <td data-label="Action">
                                    <a style="margin-right: 10px; padding: 4px; background-color: red;color:aliceblue;" onclick="return confirm('are you sure want to delete this kost?')" href="<?= base_url('admin/deleteKost/'); ?><?= $k['id']; ?>" class="remove"><i class='bx bx-minus'></i></a>

                                    <a href="<?= base_url('admin/editKost/'); ?><?= $k['id']; ?>" id="btn-edit" class="btn edit" title="edit" style="margin-right: 10px;color:aliceblue; padding: 4px; background-color: green;"><i class='bx bx-edit'></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    </div>
</section>