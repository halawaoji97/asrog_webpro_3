<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard"><?= $title; ?></span>
        </div>
    </nav>
    <div class="home-content">
        <div class="action-admin">
            <a href="<?= base_url('admin/add'); ?>" class="add"><i class='bx bxs-user-plus'></i></a>
        </div>

        <div class="table-payment">
            <div class="box">
                <div class="title">Member List</div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Kost</th>
                            <th scope="col">Price</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Status Booking</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td data-label="Name"><?= $user['name']; ?></td>
                                <td data-label="Phone"><?= $user['telp']; ?></td>
                                <td data-label="Email"><?= $user['email']; ?></td>
                                <td data-label="Address"><?= $user['address']; ?></td>
                                <td data-label="Kost"><?= $user['kost']; ?></td>
                                <td data-label="Price"><?= $user['price']; ?></td>
                                <td data-label="Start Date"><?= $user['startDate']; ?></td>
                                <td data-label="Status Booking"><?= $user['status_booking']; ?></td>
                                <td data-label="Action">
                                    <a style="margin-right: 10px; padding: 4px; background-color: red;color:aliceblue;" onclick="return confirm('are you sure want to delete this member?')" href="<?= base_url('admin/deleteUser/'); ?><?= $user['id']; ?>" class="remove"><i class='bx bx-minus'></i></a>

                                    <a href="<?= base_url('admin/editUser/'); ?><?= $user['id']; ?>" id="btn-edit" class="btn edit" title="edit" style="margin-right: 10px;color:aliceblue; padding: 4px; background-color: green;"><i class='bx bx-edit'></i>
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