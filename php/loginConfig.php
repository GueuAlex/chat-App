<?php
session_start();
include_once 'config.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    //verification des information dans la BDD
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){//if user data is correct
        $row = mysqli_fetch_assoc($sql);
        $status = "En ligne";
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
       if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];
        $_SESSION['level'] = $row['post'];
        if($_SESSION['level'] == 'admin'){
            echo "admin";
        }else{
            echo "success";
        }
       
       }
        

    }else {
        echo "mot de passe ou email invalide";
    }
}else {
    echo "Veuillez renseigner tous les champs";
}