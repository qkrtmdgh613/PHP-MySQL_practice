<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '201302',
  'opentutorials');

$filtered = array(
  'title' => mysqli_real_escape_string($conn, $_POST['title']),
  'description' => mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$filtered['title']}',
        '{$filtered['description']}',
        NOW()
      )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  print(mysqli_error($conn));

} else {
  echo '생성에 성공했습니다.<a href="index.php">돌아가기</a>';
}
?>
