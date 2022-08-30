<?php
$conn = mysqli_connect("localhost", "root", "201302", "opentutorials");
$sql = "
  INSERT INTO topic (
    title,
    description,
    created
  ) VALUE (
    'MYSQL',
    'MYSQL is...',
    NOW()
  )";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo mysqli_error($conn);
}

?>
