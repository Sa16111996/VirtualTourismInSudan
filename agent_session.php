<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: agent_login.php");
        exit();
    }
?>