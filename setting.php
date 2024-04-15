<?php
    require_once 'safemysql.php';
    $db = new SefaMySQL(array('user'=>'mylogin', 'pass'=>'mypassword', 'db'=>'mydbname', 'charset'=>'utf8'));


    $user=$db->getRow('SELECT * FROM `user` WHERE
             `login`=?s AND `pass`=?s LIMIT 1',
             $_COOKIE ['login'], $_COOKIE ['pass']);
?>
