<!-- <div class="container-form"> -->
<div class="form">
  <h1>Add Kost</h1>
  <?= form_open_multipart('admin/addKost'); ?>
  <div class="row-input">
    <label for="kode_kost">Kode Kost</label>
    <input type="text" name="kode_kost" id="kode_kost">
    <?= form_error('kode_kost', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="room_size">Room Size</label>
    <input type="text" name="room_size" id="room_size">
    <?= form_error('room_size', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="room_qty">Total Room</label>
    <input type="number" name="room_qty" id="room_qty">
    <?= form_error('room_qty', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <?= form_error('price', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class=" row-input">
    <label for="facility">Facility</label>
    <input type="text" name="facility" id="facility">
    <?= form_error('facility', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="empty">Available Room</label>
    <input type="number" name="empty" id="empty">
    <?= form_error('empty', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="filled">Room Filled</label>
    <input type="number" name="filled" id="filled">
    <?= form_error('filled', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="full_address">Address</label>
    <textarea name="full_address" id="full_address" cols="30" rows="3"></textarea>
    <?= form_error('full_address', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="3"></textarea>
    <?= form_error('description', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class="row-input">
    <label for="image">Image</label>
    <input type="file" class="form-control form-control-user" id="image" name="image">
    <?= form_error('image', ' <small class="text-danger">', '</small>'); ?>
  </div>
  <div class=" btn-form">
    <button type="submit" class="btn-login">Add Kost</button>
  </div>
  <div class="asked-for">
    <small class="already"><a href="<?= base_url('admin/listKost'); ?>">Cancel</a>
    </small>
  </div>
  </form>
</div>
<!-- </div> -->