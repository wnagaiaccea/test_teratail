<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['text'];
    echo $_POST['text'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="text">
    <input type="submit">
</form>
https://teratail.com/questions/62661
</body>
</html>
