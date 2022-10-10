<?php include "includes/header.php"?>

    <div id="wrapper">
<!--Navigation -->
<?php include "includes/navigation.php"?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <?php

                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                        }else{
                            $source = '';
                        }

                        switch($source){
                            case 'add_teacher';
                            include "includes/add_teacher.php";
                            break;

                            case 'edit_teacher';
                            include "includes/edit_teacher.php";
                            break;

                            default:
                            include "includes/view_teacher.php";


                        }

                        ?>
                    </div>
                </div>

            </div>

<?php include "includes/footer.php" ?>