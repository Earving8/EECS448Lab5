<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j666m000", "gei4uiYi", "j666m000");
$delPost = $_POST["deletePosts"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(!empty($delPost)){
    foreach ($delPost as $postID) {  
        $query = "DELETE FROM Posts WHERE post_id = $postID";
        if ($result = $mysqli->query($query)){
            echo "succesfully deleted post with id ". $postID ."<br>";

        }else{
            echo "error";
        }
    }
}else{
    echo "You dont have any posts selected";
}

/* close connection */

$mysqli->close();
?>