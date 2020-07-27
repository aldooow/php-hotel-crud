<?php
include __DIR__ . '/database.php';

$sql = "SELECT * FROM stanze";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0){
  // Ci sono risultati
  // faccio qualcosa
  $rooms = [];
  while($row = $result->fetch_assoc()) {
    $rooms[] = $row;
  }
} elseif($result){
  //La query funziona, ma ci sono 0 risultati
  // faccio qualcosa
  $rooms = [];
} else {
  die('Query error');
}
$conn->close();

 ?>
