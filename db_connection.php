<?php
    define('db_server', "us-cdbr-azure-southcentral-e.cloudapp.net");
    define('db_username', "be3149d439cf7b");
    define('db_password', "7fe76a1d");
    define('db_name', "DB1509941_1");

    $db = mysqli_connect(db_server, db_username, db_password, db_name);

    if(!$db){
        echo "Can't connect to Database" . mysqli_error();
    }
?>