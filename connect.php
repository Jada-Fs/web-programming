<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm password=$_POST['confirm password'];

    //Database connection
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registration(firstName, lastName, gender, email, password, confirm password) values(?, ?, ?, ?, ?, ?)"){
            $stmt->bind_param("ssssss",$firstName, $lastName, $gender, $email, $password, $confirm password);
            $stmt->execute();
            echo "Registration Successfully...";
            $stmt->close();
            $conn->close();
            

        }
    }


?>
    
