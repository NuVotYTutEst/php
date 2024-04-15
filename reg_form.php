<form action="reg_action.php" method="post">
    Введите имя нового пользователя: <input type="text" name="newname"><br>
    Введите логин: <input type="text" name="newlogin"><br>
    Введите пароль: <input type="password" name="newpass"><br>
    Группа пользователя: <select name="newgroup">
                            <option value="2">Пользователь</option>
                            <option value="1">Администратор</option>
                         </select><br>
    <input type="submit" name="reg" value="Добавить пользователя"/>
</form>