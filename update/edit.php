<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/../partials/header.php' ?>

<main>
  <h2>Edit Room N: <?php echo $room['room_number']; ?></h2>
  <form action="<?php echo $base_path . 'update/update.php'; ?>" method="post">
      <!-- <label>ID Room</label> -->
    <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">


    <div>
      <label>Room N</label>
      <input type="text" name="room_number" value="<?php echo $room['room_number']; ?>">
    </div>

    <div>
      <label>Piano</label>
      <input type="text" name="room_floor" value="<?php echo $room['floor']; ?>">
    </div>

    <div>
      <label>Beds</label>
      <input type="text" name="room_beds" value="<?php echo $room['beds']; ?>">
    </div>


    <div>
      <input type="submit" value="SAVE">
    </div>
  </form>
</main>
