<?php
include_once 'conn.php';

if(isset($_POST['submit'])){
    $firstname =  $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['mail'];
    $comment = $_POST['comment'];

    if(!empty($firstname) && !empty($lastname) && !empty($comment)){
        if(strlen($firstname) > 15 || strlen($firstname) > 15 || strlen($firstname) > 250){
            echo 'sorry max length';
        }else{
            $sql = "INSERT INTO myusers(firstname,lastname,email,allcomments)VALUES('$firstname','$lastname','$email','$comment');";
            $result = mysqli_query($conn,$sql);
            header("Location:../index.php?success");
        }
    }else{
        echo 'empty values not allowed';
    }
    
}

?>