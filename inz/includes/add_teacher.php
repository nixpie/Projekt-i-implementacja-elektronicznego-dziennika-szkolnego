<?php

    if(isset($_POST['create_teacher'])){
        
        $last_name = $_POST['nazwisko'];
        $name = $_POST['imie'];
        $teacher_subject_id = $_POST['teacher_subject'];
        $teacher_user = $_POST['teacher_user'];

        $query = "INSERT INTO nauczyciel( nazwisko, imie, id_przedmiot, id_uzytkownik) ";
        $query .= "VALUES ('{$last_name}','{$name}','{$teacher_subject_id}','{$teacher_user}' )";
        $create_teacher_query = mysqli_query($connection, $query);
        if(!$create_teacher_query){
        die("Failed to create". mysqli_error($connection));
        }
        header("Location: show_teacher.php");

    }

?>
<h1>Dodaj nauczyciela</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nazwisko">Nazwisko</label>
        <input type="text" class="form-control" name="nazwisko">
    </div>
    <div class="form-group">
        <label for="imie">Imię</label>
        <input type="text" class="form-control" name="imie">
    </div>
    <div class="form-group">
        <select name="teacher_subject" id="">
            <?php
            $query = "SELECT * FROM przedmiot";
            $select_subject = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($select_subject)){
                $subject_id = $row['id_przedmiot'];
                $subject_title = $row['nazwa'];
                
                echo "<option value='{$subject_id}'>{$subject_title}</option>";

            }
            

            ?>


        </select>
    </div>
    <div class="form-group">
        <select name="teacher_user" id="">
            <?php
            $query = "SELECT * FROM uzytkownik";
            $select_user = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($select_user)){
                $user_id = $row['id_uzytkownik'];
                $user_name = $row['imie'];
                $user_lastname = $row['nazwisko'];
                
                echo "<option value='{$user_id}'>{$user_name} {$user_name}</option>";

            }
            

            ?>


        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_teacher" value="Dodaj nauczyciela">
    </div>
</form>