<?php

if(isset($_GET['edit_user'])){
    $edit_user_id = $_GET['edit_user'];

    $query="SELECT * FROM uzytkownik WHERE id_uzytkownik = $edit_user_id ";
    $select_user = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user)){

        $user_id = $row['id_uzytkownik'];
        $user_name = $row['imie'];
        $user_lastname = $row['nazwisko'];
        $user_login = $row['login'];
        $user_password = $row['haslo'];
        $user_role = $row['rola'];
}
}

    if(isset($_POST['edit_user'])){

        $user_name = $_POST['imie'];
        $user_lastname = $_POST['nazwisko'];
        $user_login = $_POST['login'];
        $user_password = $_POST['haslo'];
        $user_role = $_POST['rola'];

        $query = "UPDATE uzytkownik SET ";
        $query .="imie = '{$user_name}', ";
        $query .="nazwisko = '{$user_lastname}', ";
        $query .="login = '{$user_login}', ";
        $query .="haslo = '{$user_password}', ";
        $query .="rola = '{$user_role}' ";
        $query .="WHERE id_uzytkownik = '{$edit_user_id}' ";
        $edit_teacher_query = mysqli_query($connection, $query);
        if(!$edit_teacher_query){
        die("Failed to create". mysqli_error($connection));
        }
        header("Location: show_user.php");
    }

?>
<h1>Edytuj użytkownika</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="imie">Imię</label>
        <input type="text" value="<?php echo $user_name; ?>" class="form-control" name="imie">
    </div>
    <div class="form-group">
        <label for="nazwisko">Nazwisko</label>
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="nazwisko">
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" value="<?php echo $user_login; ?>" class="form-control" name="login">
    </div>
    <div class="form-group">
        <label for="haslo">Hasło</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="haslo">
    </div>
    <div class="form-group">
    <label>Rola</label>
    <br>
        <select name="rola" id="">
            <option value="uczeń"><?php echo $user_role ?></option>
            <?php

            if($user_role == 'admin'){
                echo "<option value='nauczyciel'>nauczyciel</option>";
                echo "<option value='uczeń'>uczeń</option>";
            }else if($user_role == 'uczeń'){
                echo "<option value='admin'>admin</option>";
                echo "<option value='nauczyciel'>nauczyciel</option>";
            }else if($user_role == 'nauczyciel'){
                echo "<option value='admin'>admin</option>";
                echo "<option value='uczeń'>uczeń</option>";
            }

            ?>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edytuj użytkownika">
    </div>
</form>