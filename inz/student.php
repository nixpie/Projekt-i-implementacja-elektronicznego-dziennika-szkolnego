<?php include "includes/header.php";?>

    <div id="wrapper">
        
<!--Navigation -->
<?php include "includes/navigation_student.php"?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Witaj w dzienniku elektronicznym ! studencie
                            <?php

                                echo $_SESSION['login'];
                            ?>
                        </h1>
                        
                    </div>
                </div>

            </div>
<?php include "includes/footer.php" ?>