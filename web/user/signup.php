<?php
session_start();
require 'db.php';

if(isset($_POST['Name'])){$user = $_POST['Name'];}
if(isset($_POST['username'])){$userName = $_POST['username'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass'])){$password = $_POST['pass'];}

$res = $db->prepare('SELECT * FROM user');
$res ->execute();

while($row = $res->fetch()){
     
    if ($email == $row['email'])
        {
       
            $flag=1; 
            break;
        }
    else 
        {
            $flag=0;
        }
}
if ($flag==1){
    require 'index.php';
    echo "<script type='text/javascript'>alert('This Email already exists');</script>";
    $db = null;
}
else if ($flag==0){
    $stmt=$db->prepare("INSERT INTO user (name,email, UserName,password) VALUES (:Name, :Email, :UserName, :password)");
    $stmt->bindParam(':Name', $user);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':UserName', $userName);
    $stmt->bindParam(':password', $password);
    $stmt ->execute(); 
    require 'homepage.php';
    $db = null;
}
?>