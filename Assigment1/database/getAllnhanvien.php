<?php

include './database.php';
$db = new database();
$sql = "SELECT * FROM `nhanviens`";
$db->query($sql);
$arr = array();
while ($row = $db->fetch()) {
    $arr[] = $row;
}
echo $json_response = json_encode($arr);
?>

