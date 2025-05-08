<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $foodname = $_POST['foodname'];
    $address = $_POST['address'];

    //Database connection
    $conn = new mysqli('localhost','root','','order');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, number, foodname, address )
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis",$name, $email, $number, $foodname, $addres);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>