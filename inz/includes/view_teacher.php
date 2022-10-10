

<h1>Lista nauczycieli</h1>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nazwisko</th>
                                    <th>Imię</th>
                                    <th>Przedmiot</th>
                                    <th>Użytkownik</th>
                                </tr>
                            </thead>
                        
                        <tbody>
                            <?php

                                $query="SELECT * FROM nauczyciel";
                                $select_teacher = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_array($select_teacher)){

                                    $teacher_id = $row['id_nauczyciel'];
                                    $teacher_lastname = $row['nazwisko'];
                                    $teacher_name = $row['imie'];
                                    $teacher_subject_id = $row['id_przedmiot'];
                                    $teacher_user = $row['id_uzytkownik'];

                                    echo "<tr>";
                                        echo "<td>".$teacher_id."</td>";
                                        echo "<td>".$teacher_lastname."</td>";
                                        echo "<td>".$teacher_name."</td>";
                                        
                                        $query = "SELECT * FROM przedmiot WHERE id_przedmiot = {$teacher_subject_id}";
                                        $select_subject_id = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_subject_id)){
                                            $subject_id = $row["id_przedmiot"];
                                            $subject_title = $row["nazwa"];
                                        }

                                        echo "<td>{$subject_title}</td>";

                                        
                                        $query = "SELECT * FROM uzytkownik WHERE id_uzytkownik = {$teacher_user}";
                                        $select_user = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_user)){
                                            $user_id = $row['id_uzytkownik'];
                                            $user_name = $row['imie'];
                                            $user_lastname = $row['nazwisko'];
                                        }
                                        echo "<td>{$user_name} {$user_name}</td>";

                                        
            

            

                                        echo "<td><a href='show_teacher.php?source=edit_teacher&t_id={$teacher_id}'>Edytuj</a></td>";
                                        echo "<td><a href='show_teacher.php?delete={$teacher_id}'>Usuń</a></td>";
                                    echo "</tr>";
                                    
                                }

                            ?>
                        </tbody>
</table>


<?php // delete teacher

if(isset($_GET['delete'])){
    $delete_teacher_id = $_GET['delete'];
    $query = "DELETE from nauczyciel WHERE id_nauczyciel = {$delete_teacher_id}";
    $delete_teacher_query = mysqli_query($connection, $query);
    header("Location: show_teacher.php");
}


?>