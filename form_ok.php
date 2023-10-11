<?php
    $subject = $_POST['subject'];
    $writer = $_POST['writer'];
    $content = $_POST['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>입력하신 데이터는 다음과 같습니다.</h3>
    <div>이름: <?=$writer?> </div>
    <div>내용: <?=$content?> </div>
</body>
</html>