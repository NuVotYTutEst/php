<?php
setcookie('login', '', time() -60*60*24);
setcookie('pass', '', time() -60*60*24);
header("Location: ".$_SERVER['HTTP_REFERER']);
exit();
?>