<?php session_start(); ?>

<?php
    $_SESSION['login'] = null;
    $_SESSION['name'] = null;
    $_SESSION['lastname'] = null;
    $_SESSION['role'] = null;

    header("Location: ../login.php");
?>