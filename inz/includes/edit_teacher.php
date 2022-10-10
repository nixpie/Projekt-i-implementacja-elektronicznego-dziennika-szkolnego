<?php
if(isset($_GET['t_id'])){
    $get_teacher_id = $_GET['t_id'];
}

    $query="SELECT * FROM nauczyciel WHERE id_nauczyciel = $get_teacher_id ";
    $select_teacher_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_teacher_by_id)){

    $teacher_id = $row['id_nauczyciel'];
    $teacher_lastname = $row['nazwisko'];
    $teacher_name = $row['imie'];
    $teacher_subject_id = $row['id_przedmiot'];  
    $teacher_user = $row['id_uzytkownik'];                              
    }

    if(isset($_POST['update_teacher'])){
        $teacher_lastname = $_POST['nazwisko'];
        $teacher_name = $_POST['imie'];
        $teacher_subject_id = $_POST['teacher_subject'];
        $teacher_user = $_POST['teacher_user'];

        $query = "UPDATE nauczyciel SET ";
        $query .="nazwisko = '{$teacher_lastname}', ";
        $query .="imie = '{$teacher_name}', ";
        $query .="id_przedmiot = '{$teacher_subject_id}', ";
        $query .="id_uzytkownik = '{$teacher_user}' ";
        $query .="WHERE id_nauczyciel = '{$get_teacher_id}' ";

        $update_teacher = mysqli_query($connection, $query);

        if(!$update_teacher){
            die("Query failed: " . mysqli_error($connection));
        }
        header("Location: show_teacher.php");
    }

    


?>


<h1>Edytuj nauczyciela</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nazwisko">Nazwisko</label>
        <input value ="<?php echo $teacher_lastname ; ?>" type="text" class="form-control" name="nazwisko">
    </div>
    <div class="form-group">
        <label for="imie">Imię</label>
        <input value ="<?php echo $teacher_name ; ?>" type="text" class="form-control" name="imie">
    </div>
    <div class="form-group">
        <label for="teacher_subject">Przedmiot</label>
        <br>
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
        
        <br>
        <br>
        <div class="form-group">
        <label for="teacher_user">Użytkownik</label>
        <br>
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
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_teacher" value="Edytuj nauczyciela">
    </div>
</form>