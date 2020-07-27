<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/../partials/header.php' ?>

<?php if (!empty($room)) { ?>

<main>
  <h2>Room N: <?php echo $room['room_number']; ?></h2>
  <ul>
    <li>ID: <?php echo $room['id']; ?></li>
    <li>Floor: <?php echo $room['floor']; ?></li>
    <li>Beds: <?php echo $room['beds']; ?></li>
    <li>Data Created: <?php echo $room['created_at']; ?></li>
  </ul>
</main>

<?php } else {
echo "The room does not exist!!";
 } ?>
