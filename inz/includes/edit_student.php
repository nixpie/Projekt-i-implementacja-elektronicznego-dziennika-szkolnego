<?php
if(isset($_GET['s_id'])){
    $get_student_id = $_GET['s_id'];
}

    $query="SELECT * FROM uczen WHERE id_uczen = $get_student_id ";
    $select_student_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_student_by_id)){

        $id_student = $row['id_uczen'];
        $last_name = $row['nazwisko'];
        $name = $row['imie'];
        $class = $row['id_klasa'];
        $city = $row['miasto'];
        $street = $row['ulica'];
        $house = $row['nr_domu'];
        $apartment = $row['nr_mieszkania'];
        $post_code = $row['kod_pocztowy'];
        $student_user = $row['id_uzytkownik']; 

    }

    if(isset($_POST['update_student'])){
        $last_name = $_POST['nazwisko'];
        $name = $_POST['imie'];
        $class = $_POST['student_class'];
        $city = $_POST['miasto'];
        $street = $_POST['ulica'];
        $house = $_POST['nr_domu'];
        $apartment = $_POST['nr_mieszkania'];
        $post_code = $_POST['kod_pocztowy'];
        $student_user = $_POST['student_user'];


        $query = "UPDATE uczen SET ";
        $query .="nazwisko = '{$last_name}', ";
        $query .="imie = '{$name}', ";
        $query .="id_klasa = '{$class}', ";
        $query .="miasto = '{$city}', ";
        $query .="ulica = '{$street}', ";
        $query .="nr_domu = '{$house}', ";
        $query .="nr_mieszkania = '{$apartment}', ";
        $query .="kod_pocztowy = '{$post_code}', ";
        $query .="id_uzytkownik = '{$student_user}' ";
        $query .="WHERE id_uczen = '{$get_student_id}' ";

        $update_student = mysqli_query($connection, $query);

        if(!$update_student){
            die("Query failed: " . mysqli_error($connection));
        }
        header("Location: show_student.php");

    }

    


?>


<h1>Edytuj studenta</h1>
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
    <label for="student_class">Użytkownik</label>
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
        <input class="btn btn-primary" type="submit" name="update_student" value="Edytuj ucznia">
    </div>
</form>