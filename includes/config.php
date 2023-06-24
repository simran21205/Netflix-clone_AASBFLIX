<?php
ob_start(); //op buffering
session_start();

date_default_timezone_set("Asia/Kolkata");
try{
    $con = new PDO("mysql:dbname=aasbflix;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    exit("connection failed: ".$e->getMessage());
}
?>