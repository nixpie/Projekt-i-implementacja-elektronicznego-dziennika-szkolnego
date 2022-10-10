<?php

    if(isset($_POST['create_user'])){

        $user_name = $_POST['imie'];
        $user_lastname = $_POST['nazwisko'];
        $user_login = $_POST['login'];
        $user_password = $_POST['haslo'];
        $user_role = $_POST['rola'];

        $query = "INSERT INTO uzytkownik( imie, nazwisko, login, haslo, rola) ";
        $query .= "VALUES ('{$user_name}', '{$user_lastname}', '{$user_login}','{$user_password}','{$user_role}' )";
        $create_teacher_query = mysqli_query($connection, $query);
        if(!$create_teacher_query){
        die("Failed to create". mysqli_error($connection));
        }
    }

?>
<h1>Dodaj użytkownika</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="imie">Imię</label>
        <input type="text" class="form-control" name="imie">
    </div>
    <div class="form-group">    
        <label for="nazwisko">Nazwisko</label>
        <input type="text" class="form-control" name="nazwisko">
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
        <label for="haslo">Hasło</label>
        <input type="password" class="form-control" name="haslo">
    </div>
    <div class="form-group">
    <label>Rola</label>
    <br>
        <select name="rola" id="">
            <option value="uczeń">Wybierz rolę</option>
            <option value="admin">admin</option>
            <option value="nauczyciel">nauczyciel</option>
            <option value="uczeń">uczeń</option>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Dodaj użytkownika">
    </div>
</form>