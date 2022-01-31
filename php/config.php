<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
if(!$conn){
    echo "bdd ok". mysqli_connect_errno();
}