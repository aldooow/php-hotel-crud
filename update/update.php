<?php
include __DIR__ . '/../database.php';

$room_id = $_POST['room_id'];
$room_number = $_POST['room_number'];
$room_floor = $_POST['room_floor'];
$room_beds = $_POST['room_beds'];


$sql = "UPDATE `stanze`
SET `room_number` = $room_number,
`floor` = $room_floor,
`beds` = $room_beds,
`updated_at` = NOW()
WHERE `id` = $room_id";

$result = $conn->query($sql);

if($result){
  echo 'update completed';
}else{
  die('update failed!');
}

 ?>
