<?php 
$servername="localhost";
$username="root";
$password="";
$database="user";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "connection not successful";
}
else{
    echo "connection successful";
}
?>