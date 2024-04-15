<?php include_once 'setting.php';
$data = $db->getCol("SELECT `value` FROM `variants` WHERE `id` IN (?a)", $_POST);

$s=0;
foreach ($data as $value) {
    $s=$s+$value;
}
echo'Вы набрали: '.$s.' баллов. Молодец!';
?>
<a href="index.php">На шлавную</a>