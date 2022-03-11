<?php
session_start();
include_once 'config.php';
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    //verification de l'adresse email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // if email is valid
        // virication si l'email n'exite pas deja
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){// if already exist
            echo "$email existe déjà !";
        }else {
            //verification de l'image
            if(isset($_FILES['image'])){ //if file is uploaded
                $img_name = $_FILES['image']['name'];//obtention du nom de fichier
                $img_type = $_FILES['image']['type'];// type de fichier
                $tmp_name = $_FILES['image']['tmp_name'];//nom temporare du fichier

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);// obtient l'extention de l'image

                $extention = ['png', 'jpeg', 'jpg'];// extention autoriser
                if(in_array($img_ext, $extention) === true){// if user upload img extention is correct
                    $time = time(); // return current time
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){//if user upload img to our folder sucessfully
                        $status = "En ligne";//once user signed up then status will active now
                        $random_id = rand(time(),10000000);//creating random id for user

                        //isertion des données dans la users de notre BDD
                        $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status) VALUES({$random_id}, '{$fname}','{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                        if($sql2){//if these data inserted
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) >0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];//using this session we used user unique_id in other php file
                                echo "success";
                            }
                        }else {
                            echo "Something went wrong";
                        }

                    }
                    
                }else {
                    echo "Selectionner une image de type - jpeg, jpg, png";
                }
            }else {
                echo "Veuillez selectionner un image";
            }
        }
    }else {
        echo "$email est  invalide !";
    }

}else {
    echo "Veuillez resigner tous les champs";
}