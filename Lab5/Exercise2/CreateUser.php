
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$user = $_POST["userName"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "j666m000", "gei4uiYi", "j666m000");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$existing = "SELECT user_id from Users where user_id ='$user'";
$query = "INSERT INTO Users (user_id) VALUES ('$user')";


if (mysqli_num_rows($mysqli->query($existing)) === 1 ){
    
    echo "User already exists";

}else if($mysqli->query($query)){
    
    echo  "User created successfully";
    
}else{
    echo "User was not able to be created";
}

/* close connection */

$mysqli->close();
?>
