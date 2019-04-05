<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "j666m000", "gei4uiYi", "j666m000");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "SELECT * from Users";


if ($result = $mysqli->query($query)){
    
    while ($row = $result->fetch_assoc()) {
        echo $row['user_id']."<br>";
    }

}else{
    echo "error";
}

/* close connection */

$mysqli->close();

echo "<br><a href='AdminHome.html'>Return</a>";
?>