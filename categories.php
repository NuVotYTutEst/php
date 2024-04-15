<?php
    include_once 'setting.php';
    $cats=$db->getAll("SELECT * FROM `categories.php`");
?>


<ul>
<?php
    foreach ($cats as $row){
        echo '<li><a href="category.php?cat='.$row['id'].'">'.$row['name'].'</a></li>';
    }
?>
</ul>


<?php
    include_once 'setting.php';
    $tests=$db->getAll("SELECT * FROM `tests` WHERE `_category`=?i",$_GET['cat']);
    $cat=$db->getRow("SELECT *FROM `categories` WHERE `id`=?i",$_GET['cat']);
?>
<h1>Тесты в категории: <?php echo $cat['name'];?></h1>
<ul>
<?php
    foreach ($tests as $row) {
        echo '<li><a href="test.php?test='.$row['id'].'">'.
        $row['title'].'</a> (<a href="edit_test.php?id='.
        $row['id'].'">Изменить</a>)</li>';
    }
?>
</ul>
<a href="new_test.php?cat=<?php echo $cat['id'];?>">Новый тест</a>