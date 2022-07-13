<?php

if(isset($_POST['name']) && isset($_POST['message'])){

    include 'db_conn.php';

    function validate($data){
     $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $name = validate($_POST['name']);
    $message = validate($_POST['message']);
    // var_dump($message);

    if(empty($message) || empty($name)){
        header('Location:index.html');
    }else{

        $sql = "INSERT INTO try_row(name, message) VALUES('$name','$message')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo"Your message was sent successfully!";
        }else{
        echo"Your message could not be sent!";
        }
    }
}else{
    header("Location:index.html");
}