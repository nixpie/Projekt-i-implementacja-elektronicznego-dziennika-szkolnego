


<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Sprawdzian 1</th>
                                    
                                </tr>
                            </thead>
                        
                        <tbody>
                            <?php
                                if(isset($_GET['c_id'])){
                                    $get_student_id = $_GET['c_id'];
                                }

                                $query="SELECT * FROM uczen WHERE id_klasa = $get_student_id";
                                $select_student_class = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_array($select_student_class)){

                                    $student_id = $row['id_uczen'];
                                    $student_name = $row['imie'];
                                    $student_lastname = $row['nazwisko'];
                                    $student_grade = $row['sprawdzian_1'];
                                    

                                    echo "<tr>";
                                        echo "<td>".$student_id."</td>";
                                        echo "<td>".$student_name."</td>";
                                        echo "<td>".$student_lastname."</td>";

                                        $query = "SELECT * FROM ocena WHERE id_ocena = {$student_grade}";
                                        $select_grade = mysqli_query($connection, $query);
                                        while ($row = mysqli_fetch_assoc($select_grade)){
                                            $grade_id = $row['id_ocena'];
                                            $grade_title = $row['ocena'];
                                            }

                                        echo "<td>".$student_grade."</td>";
                                        
                                    //     echo "<td>".$user_login."</td>";
                                    //     echo "<td>".$user_role."</td>";
                                    //     echo "<td>"."Uzytkownik"."</td>";
                                        
                                    //     // $query = "SELECT * FROM przedmiot WHERE id_przedmiot = {$teacher_subject_id}";
                                    //     // $select_subject_id = mysqli_query($connection, $query);

                                    //     // while ($row = mysqli_fetch_assoc($select_subject_id)){
                                    //     //     $subject_id = $row["id_przedmiot"];
                                    //     //     $subject_title = $row["nazwa"];
                                    //     // }

                                    // //     echo "<td>{$subject_title}</td>";

                                        echo "<td><a href='show_user.php?source=edit_teacher&t_id={}'>Dodaj ocenę</a></td>";
                                    //     echo "<td><a href='show_user.php?change_to_student={$user_id}'>Zmień na ucznia</a></td>";
                                    //     echo "<td><a href='show_user.php?change_to_teacher={$user_id}'>Zmień na nauczyciela</a></td>";
                                    //     echo "<td><a href='show_user.php?source=edit_user&edit_user={$user_id}'>Edytuj</a></td>";
                                    //     echo "<td><a href='show_user.php?delete={$user_id}'>Usuń</a></td>";
                                    echo "</tr>";
                                    
                                }

                            ?>
                        </tbody>
</table>


