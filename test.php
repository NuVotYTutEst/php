<?php
    include_once 'setting.php';
    $test=$db->getRow("SELECT *FROM `tests` WHERE `id`=?i", $_GET['test']);
    $q=$db->getAll("SELECT * FROM `questions` WHERE `_tset`=?i", $GET['test']);
?>
<H1><?php echo $test['title'];?></H1>
<p><?php echo $test['info'];?></p>
<form method="POST" action="result_action.php">
<?php foreach ($q as $row) {
    $vars=$db->getAll("SELECT * FROM `answers` WHERE `_question`=?i",
    $row['id']);
    ?>
    <p><?php echo $row['info'];?></p>
    <select name="<?php echo $row['id'];?>">
    <?php foreach ($vars as $v) {?>
        <option value="<?php echo $v['id'];?>"> <?php echo $v['title'];
        ?></option>
    <?php } ?>
    </select>
<?php } ?>
<br><br><br>
<input type="submit" value="Завершить">
</form>
