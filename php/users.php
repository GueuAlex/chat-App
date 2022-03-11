<?php
session_start();
include_once 'config.php';
$outgoing_id = $_SESSION['unique_id'];
$restriction = $_SESSION['level'];

if ($restriction === 'cc') {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND NOT post = 'cc'");
    $output = "";
}else{
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    $output = "";
}






if(mysqli_num_rows($sql) == 0){
    $output .= "Pas de personne active pour l'instant";
}elseif(mysqli_num_rows($sql)  >= 1){
   include "data.php";
}
echo $output;