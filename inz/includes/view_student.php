

<h1>Lista uczniów</h1>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nazwisko</th>
                                    <th>Imię</th>
                                    <th>Klasa</th>
                                    <th>Miasto</th>
                                    <th>Ulica</th>
                                    <th>Numer domu</th>
                                    <th>Numer mieszkania</th>
                                    <th>Kod pocztowy</th>
                                    <th>Użytkownik</th>
                                </tr>
                            </thead>
                        
                        <tbody>
                            <?php

                                $query="SELECT * FROM uczen";
                                $select_student = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_array($select_student)){

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

                                    echo "<tr>";
                                        echo "<td>".$id_student."</td>";
                                        echo "<td>".$last_name."</td>";
                                        echo "<td>".$name."</td>";
                                        
                                        $query = "SELECT * FROM klasa WHERE id_klasa = {$class}";
                                        $select_student_class = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_student_class)){
                                            $class_id = $row["id_klasa"];
                                            $class_title = $row["nazwa"];
                                        }

                                        echo "<td>".$class_title."</td>";
                                        echo "<td>".$city."</td>";
                                        echo "<td>".$street."</td>";
                                        echo "<td>".$house."</td>";
                                        echo "<td>".$apartment."</td>";
                                        echo "<td>".$post_code."</td>";
                                        $query = "SELECT * FROM uzytkownik WHERE id_uzytkownik = {$student_user} ";
                                        $select_user = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_user)){
                                            $user_id = $row['id_uzytkownik'];
                                            $user_name = $row['imie'];
                                            $user_lastname = $row['nazwisko'];
                                        }
                                        echo "<td>{$user_name} {$user_name}</td>";



                                        echo "<td><a href='show_student.php?source=edit_student&s_id={$id_student}'>Edytuj</a></td>";
                                        echo "<td><a href='show_student.php?delete={$id_student}'>Usuń</a></td>";
                                    echo "</tr>";
                                    
                                }

                            ?>
                        </tbody>
</table>


<?php // delete student

if(isset($_GET['delete'])){
    $delete_student_id = $_GET['delete'];
    $query = "DELETE from uczen WHERE id_uczen = {$delete_student_id}";
    $delete_student_query = mysqli_query($connection, $query);
    header("Location: show_student.php");
}


?>