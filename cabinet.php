<?php echo 'Привет, '.$user['name'];
if ($user['_group']==1) include_once 'reg_form.php';
?>


$results=$db->getAll('SELECT * FROM `results` WHERE `_user`=?i',$user['id']);
echo '<h2>Результаты тестов:</h2><ul>';
foreach ($results as $res) {
    $title=$db->getOne('SELECT `title` FROM `tests` WHERE `id`=?i LIMIT 1',$res['_test']);
    echo '<li>'.$title.' - '.$res['summa'].'баллов</li>';
}
echo '</ul>';