<?php
include_once 'setting.php';
$q=$db->getRow('SELECT * FROM `questions` WHERE `id`=?i',$_GET['q']);
?>
<h2>Добавление варианта ответа</h2>
<form method="POST" action="new_answer_action.php">
Текст ответа: <input type="text" name="title"><br>
Кол-во баллов: <input type="text" name="value"><br>
Вопрос: <input type="hidden" name="q" value="<?php echo $q['id'];?>">
 <?php echo $q['info']; ?><br>
 <input type="submit" value="Добавить">
 </form>