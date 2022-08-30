<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '201302',
  'opentutorials');
  
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
  echo '<h1>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
