<?php include "db_con.php"; ?>
<?php session_start(); ?>

<?php

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM uzytkownik WHERE login = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query){
        die("Error". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)){
        $db_user_id = $row['id_uzytkownik'];
        $db_user_login = $row['login'];
        $db_user_password = $row['haslo'];
        $db_user_name = $row['imie'];
        $db_user_lastname = $row['nazwisko'];
        $db_user_role = $row['rola'];
        
    }

    if($username !== $db_user_login && $password !== $db_user_password){
        
        header("Location: ../login.php");
    }else if($username == $db_user_login && $password == $db_user_password){
        $_SESSION['login'] = $db_user_login;
        $_SESSION['name'] = $db_user_name;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['role'] = $db_user_role;
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'admin'){
                header("Location: ../admin.php");
            }elseif($_SESSION['role'] == 'uczeń'){
                header("Location: ../student.php");
            }else{
                header("Location: ../teacher.php");
            }
        }

    }else{
        
        header("Location: ../login.php");
    }


}



?>