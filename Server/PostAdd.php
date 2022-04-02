<?php
 // 1- connect to db
require("DBInfo.php");
 // define quesry 
//print($_GET['tweet_picture'] );
$query="insert into posts(user_id,post_text,post_picture) values (" . $_GET['user_id']. ",'"  . $_GET['post_text'] . "','".  $_GET['post_picture'] .  "')";  // $usename=$_GET['username'];
$result=  mysqli_query($connect, $query);
if(! $result)
{$output ="{'msg':'fail'}";
}
else {
$output ="{'msg':'post is added'}";
}
 
print( $output);// this will print the output in json
 
//5- close connection
mysqli_close($connect);
?>