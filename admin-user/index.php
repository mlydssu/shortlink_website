<?php 
session_start();

if( isset($_SESSION["submit"]) ){
    header("Location: ./dashboard/");
    exit;
} else {
    header("Location: ./login/");
    exit;
}

?>