<?php
include __DIR__ . '/../database.php';

$room_id = $_GET['id'];
$sql = "SELECT * FROM stanze WHERE `id` = $room_id";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0){
  $room = $result->fetch_assoc();
} elseif($result){
  $room = [];
} else {
  die('Query error');
}
$conn->close();


 ?>
