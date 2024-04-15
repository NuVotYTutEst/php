$user=$db->getRow ('SELECT' * FROM `users` WHERE
            `login`=?s AND `pass`=?s LIMIT 1',
            $_POST ['login'], $_POST['pass']);
if ($user) {
    setcookie('login', $user ['login'], time()+3600);
    setcookie('pass', $user ['pass'], time()+3600);
    header('location: '.$ SERVER['HTTP_REFERER']);
    exit();
}
?>