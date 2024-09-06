<?php


if($_SERVER['REQUEST_METHOD'] !== "GET"){

    header("Location: index.php");
    exit();

}else if(!isset($_GET['token'])){

    header("Location: index.php");
    exit();

}else{

    $token = $_GET['token'];
    
}