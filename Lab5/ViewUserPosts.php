<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "j666m000", "gei4uiYi", "j666m000");
$user = $_POST["userName"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "SELECT * from Posts where author_id='$user'";


if ($result = $mysqli->query($query)){
    if(mysqli_num_rows($result) === 0){
        echo "No posts from this user";
    }else{
        while ($row = $result->fetch_assoc()) {
            echo $row['content']."<br>";
        }  
    }

}else{
    echo "error";
}

/* close connection */

$mysqli->close();

echo "<br><a href='ViewUserPosts.html'>Return</a>";
?>