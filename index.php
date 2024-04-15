<?php

include 'categories.php'

if ($user) {
    echo '<a href="cabinet.php">Личный кабинет</a>';
    include 'logout_form.php';
}else{
    echo '<a href="auth_form.php">Авторизация</a>';
}
?>