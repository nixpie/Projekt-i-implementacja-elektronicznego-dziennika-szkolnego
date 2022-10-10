<?php include "includes/header.php"?>

    <div id="wrapper">
<!--Navigation -->
<?php include "includes/navigation_teacher.php"?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xs-2">
                            
                            <table class="table table-bordered table-hover">

                                <tbody>
                                    <?php //display class
                                    
                                    
                                    if(isset($_GET['source'])){
                                        $source = $_GET['source'];
                                    }else{
                                        $source = '';
                                    }
            
                                    switch($source){
                                        case 'show_class';
                                        include "includes/view_class_teacher.php";
                                        break;
            
                                        default:
                                        include "includes/view_subject_card.php";
            
            
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>

            </div>

<?php include "includes/footer.php" ?>