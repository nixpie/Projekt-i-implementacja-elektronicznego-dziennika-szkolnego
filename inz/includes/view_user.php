

<h1>Lista użytkowników</h1>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Login</th>
                                    <th>Rola</th>
                                    <th>Użytkownik</th>
                                </tr>
                            </thead>
                        
                        <tbody>
                            <?php

                                $query="SELECT * FROM uzytkownik";
                                $select_user = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_array($select_user)){

                                    $user_id = $row['id_uzytkownik'];
                                    $user_name = $row['imie'];
                                    $user_lastname = $row['nazwisko'];
                                    $user_login = $row['login'];
                                    $user_role = $row['rola'];

                                    echo "<tr>";
                                        echo "<td>".$user_id."</td>";
                                        echo "<td>".$user_name."</td>";
                                        echo "<td>".$user_lastname."</td>";
                                        echo "<td>".$user_login."</td>";
                                        echo "<td>".$user_role."</td>";
                                        echo "<td>"."Uzytkownik"."</td>";
                                        
                                        // $query = "SELECT * FROM przedmiot WHERE id_przedmiot = {$teacher_subject_id}";
                                        // $select_subject_id = mysqli_query($connection, $query);

                                        // while ($row = mysqli_fetch_assoc($select_subject_id)){
                                        //     $subject_id = $row["id_przedmiot"];
                                        //     $subject_title = $row["nazwa"];
                                        // }

                                    //     echo "<td>{$subject_title}</td>";

                                        // echo "<td><a href='show_user.php?source=edit_teacher&t_id={$teacher_id}'>Edytuj</a></td>";
                                        echo "<td><a href='show_user.php?change_to_student={$user_id}'>Zmień na ucznia</a></td>";
                                        echo "<td><a href='show_user.php?change_to_teacher={$user_id}'>Zmień na nauczyciela</a></td>";
                                        echo "<td><a href='show_user.php?source=edit_user&edit_user={$user_id}'>Edytuj</a></td>";
                                        echo "<td><a href='show_user.php?delete={$user_id}'>Usuń</a></td>";
                                    echo "</tr>";
                                    
                                }

                            ?>
                        </tbody>
</table>


<?php // delete teacher

if(isset($_GET['delete'])){
    $delete_user_id = $_GET['delete'];
    $query = "DELETE from uzytkownik WHERE id_uzytkownik = {$delete_user_id}";
    $delete_user_query = mysqli_query($connection, $query);
    header("Location: show_user.php");
}


?>

<?php // change to studnet

if(isset($_GET['change_to_student'])){
    $change_user_role = $_GET['change_to_student'];
    $query = "UPDATE uzytkownik SET rola = 'uczeń' WHERE id_uzytkownik = {$change_user_role} ";
    $change_to_student_query = mysqli_query($connection, $query);
    header("Location: show_user.php");
    if (!$change_to_student_query){
        die("Could not create post" . mysqli_error($connection));
    }
}


?>

<?php // change to teacher

if(isset($_GET['change_to_teacher'])){
    $change_user_role = $_GET['change_to_teacher'];
    $query = "UPDATE uzytkownik SET rola = 'nauczyciel' WHERE id_uzytkownik = {$change_user_role} ";
    $change_to_student_query = mysqli_query($connection, $query);
    header("Location: show_user.php");
}


?>