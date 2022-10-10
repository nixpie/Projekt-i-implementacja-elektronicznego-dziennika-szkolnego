<div class="row">
                    <div class="col-lg-6">
                        <div class="col-xs-4">
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id klasy</th>
                                        <th>Klasa</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //display class
                                    
                                    $query="SELECT * FROM klasa";
                                    $select_class = mysqli_query($connection, $query);
                                    
                                    while($row = mysqli_fetch_array($select_class)){

                                        $class_id = $row['id_klasa'];
                                        $class_name = $row['nazwa'];

                                        echo "<tr>";
                                        echo "<td>{$class_id}</td>";
                                        echo "<td>{$class_name}</td>";
                                        echo "<td><a href='show_subject_card.php?source=show_class&c_id={$class_id}'>Wyświetl klasę</a></td>";
                                        echo "</tr>";

                                    }
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
            