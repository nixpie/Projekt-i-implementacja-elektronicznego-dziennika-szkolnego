<?php

    if(isset($_POST['create_student'])){
        
        $last_name = $_POST['nazwisko'];
        $name = $_POST['imie'];
        $student_class = $_POST['student_class'];
        $city = $_POST['miasto'];
        $street = $_POST['ulica'];
        $house = $_POST['nr_domu'];
        $apartment = $_POST['nr_mieszkania'];
        $post_code = $_POST['kod_pocztowy'];
        $student_user = $_POST['student_user'];


        $query = "INSERT INTO uczen(nazwisko, imie, id_klasa, miasto, ulica, nr_domu, nr_mieszkania, kod_pocztowy, id_uzytkownik) ";
        $query .= "VALUES ('{$last_name}','{$name}','{$student_class}','{$city}','{$street}','{$house}','{$apartment}','{$post_code}','{$student_user}' )";
        $create_student_query = mysqli_query($connection, $query);
        if(!$create_student_query){
        die("Failed to create". mysqli_error($connection));
        }
        header("Location: show_student.php");
    }

?>
<h1>Dodawanie ucznia</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nazwisko">Nazwisko</label>
        <input type="text" class="form-control" name="nazwisko">
    </div>
    <div class="form-group">
        <label for="imie">Imię</label>
        <input type="text" class="form-control" name="imie">
    </div>
    <br>
    <div class="form-group">
    <label for="student_class">Klasa</label>
    <br>
        <select name="student_class" id="">
            <?php
            $query = "SELECT * FROM klasa ";
            $select_class = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($select_class)){
                $class_id = $row['id_klasa'];
                $class_title = $row['nazwa'];
                
                echo "<option value='{$class_id}'>{$class_title}</option>";

            }
            

            ?>


        </select>
    </div>
    <div class="form-group">
        <label for="miasto">Miasto</label>
        <input type="text" class="form-control" name="miasto">
    </div>
    <div class="form-group">
        <label for="ulica">Ulica</label>
        <input type="text" class="form-control" name="ulica">
    </div>
    <div class="form-group">
        <label for="nr_domu">Numer domu</label>
        <input type="text" class="form-control" name="nr_domu">
    </div>
    <div class="form-group">
        <label for="nr_mieszkania">Numer mieszkania</label>
        <input type="text" class="form-control" name="nr_mieszkania">
    </div>
    <div class="form-group">
        <label for="kod_pocztowy">Kod pocztowy</label>
        <input type="text" class="form-control" name="kod_pocztowy">
    </div>
    <br>
    <div class="form-group">
    <label for="student_user">Użytkownik</label>
    <br>
        <select name="student_user" id="">
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
        <input class="btn btn-primary" type="submit" name="create_student" value="Dodaj ucznia">
    </div>
</form>