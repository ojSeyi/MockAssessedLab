<?php
    include ("db_connection.php");

    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo "Enter Username and Password";
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = $username AND password = $password";
        $result = mysqli_query($db, $sql);
        if($result){
            header("Location: index.php");
        }else{
            echo "Incorrect username and password" . mysqli_error();
        }
    }
?>