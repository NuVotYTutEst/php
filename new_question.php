<?php
include_once 'setting.php';
$test=$db->getRow('SELECT * FROM `tests` WHERE `id`=?i',$_GET['test']);
?>
<h2>Новый вопрос</h2>
<form method="POST" action="new_question_action.php">
Вопрос: <textarea name="info"> </textarea><br>
Тест: <input type="hidden" name="test" value="<?php echo $test['id'];?>">
 <?php echo $test['title']; ?><br>
<input type="submit" value="Добавить">
</form>