<?php
    session_start();

    // menghancurkan session
    unset($_SESSION['user_id']);
    unset($_SESSION['nama']);
    unset($_SESSION['level']);
    
    header("location:".BASE_URL."index.php");

?>