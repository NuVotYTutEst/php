<?php
    include_once 'setting.php';
    $db->query("INSERT INTO `tests` SET `title`=?s, `info`=?s,
    `date_add`=NOW(), `_user`=?i, `_category`=?i",$_POST['title'],$_POST['info'],$user['id'],$_POST['category']);
?>
<a href="index.php">На главную</a>