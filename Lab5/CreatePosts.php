
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$user = $_POST["userName"];
$content = $_POST["content"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "j666m000", "gei4uiYi", "j666m000");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$existing = "SELECT user_id from Users where user_id ='$user'";
$post = "INSERT INTO Posts (content, author_id) VALUES ('$content','$user')";


if (mysqli_num_rows($mysqli->query($existing)) === 1 ){
    
    if($mysqli->query($post)){
        echo "Posted succesfully";
    }else{
        echo "unable to post";
    }

}else{
    echo "User does not exist";
}

/* close connection */

$mysqli->close();

echo "<br><a href='CreatePosts.html'>Return</a>";
?>
