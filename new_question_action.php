<?php
include_once 'setting.php';

$db->query("INSERT INTO `questions` SET `info`=?s, `_test`=?i",$_POST['info'],$_POST['test']);
?>
<a href="index.php">На главную</a>