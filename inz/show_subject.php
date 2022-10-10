<?php include "includes/header.php"?>

    <div id="wrapper">
<!--Navigation -->
<?php include "includes/navigation.php"?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xs-4">
                        <h1>Lista przedmiotów</h1>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id przedmiotu</th>
                                        <th>Przedmiot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //display subject
                                    
                                    $query="SELECT * FROM przedmiot";
                                    $select_subject = mysqli_query($connection, $query);
                                    
                                    while($row = mysqli_fetch_array($select_subject)){

                                        $subject_id = $row['id_przedmiot'];
                                        $subject_name = $row['nazwa'];

                                        echo "<tr>";
                                        echo "<td>{$subject_id}</td>";
                                        echo "<td>{$subject_name}</td>";
                                        echo "</tr>";
                                    }
                                    
                                    ?>

                                </tbody>
                            </table>
                            </div>
                        </div>

                        
                    </div>
                </div>


            </div>
            
<?php include "includes/footer.php" ?>