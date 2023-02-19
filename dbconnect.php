<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'charity';
$conn = mysqli_connect($server, $username, $email, $message,$subject,$database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>