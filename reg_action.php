<?php
    include_once 'setting.php';
    $db->query('INSERT INTO `users` SET `name`=?s, `login`=?s, `pass`=?s, `_group`=?i',
    $_POST['newname'], $_POST['newlogin'], $_POST['newpass'], $_POST['newgroup']);
?>