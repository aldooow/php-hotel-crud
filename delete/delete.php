<?php
include __DIR__ . '/../database.php';
$room_id = $_POST['form_id'];

$sql = "DELETE FROM stanze WHERE `id` = $room_id";
$result = $conn->query($sql);
if(!$result){
  die('Failed!');
}
 ?>

<?php include __DIR__ . '/../partials/header.php';?>

<main>
  <p>Fine!</p>
</main>
