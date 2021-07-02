<h1><?php
$arr = json_decode($_COOKIE['confirmCart'], true);
echo json_encode($arr)
?></h1>