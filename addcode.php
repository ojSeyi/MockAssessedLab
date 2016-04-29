
/**
 * Created by PhpStorm.
 * User: OJ Pumping
 * Date: 29/04/2016
 * Time: 18:42
 */

<?php
include ("db_connection.php");
    if(empty($_POST['bugname']) || empty($_POST['bugcategory']) || empty($_POST['bugsummary'])){
        echo "Enter all values";
    }else {
        $bugname = $_POST['bugname'];
        $bugname = $_POST['bugcategory'];
        $bugname = $_POST['bugsummary'];

        $getbugs = "INSERT INTO bugs(bugname, bugcategory, bugsummary) VALUES ($bugname, $bugcategory, $bugsummary)";
        $result = mysqli_query($db, $getbugs);
    }