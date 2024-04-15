<?php
    include_once 'setting.php';
    $cats=$db->getAll("SELECT * FROM `categories`");
?>
<h2>Новый тест</h2>
<form method="POST" action="new_test_action.php">
Название: <input type="text" name="title"><br>
Описание: <textarea name="info"> </textarea><br>
Категория: <select name="category">
<?php
foreach ($cats as $cat) {
?>
    <option value="<?php echo $cat['id'];?>" <?php if ($cat['id'] == $_GET['cat']) echo 'selected';?>><?php echo $cat['name'];?></option>
<?php
}
?>
</select><br>
<input tyoe="submit" value="Создать">
</form>