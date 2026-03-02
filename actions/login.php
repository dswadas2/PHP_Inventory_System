<?php
include('../connections/db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users";
$results = $conn->query($sql);

while($row = $results->fetch_assoc()){
    if($row['username'] == $username){
        if($row['password'] == $password){
            header('Location: ../dashboard.php');
        }else{
            header('Location: ../index.php');
        }
    }else{
        header('Location: ../index.php');
    }
}
?>