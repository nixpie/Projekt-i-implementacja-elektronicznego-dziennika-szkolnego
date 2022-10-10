<?php include "includes/header.php"?>

    <div id="wrapper">
<!--Navigation -->
<?php include "includes/navigation.php"?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xs-2">
                        <h1>Lista klas</h1>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id klasy</th>
                                        <th>Klasa</th>
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
                                        echo "</tr>";

                                    }
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>

            </div>

<?php include "includes/footer.php" ?>