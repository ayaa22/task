<!-- validates user and admin login by retrieving data 
from database and checks whether was he an admin or user and redirect him to the appropriate page-->

<?php
session_start();
// includes the database file for connection first 
require 'user/db.php';

if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass'])){$password = $_POST['pass'];}

// this flag is used to check wether the value is found or not and if it is found it will break from the loop
$flag=0;

$res = $db->prepare('SELECT * FROM user');
$res ->execute();
while($row = $res->fetch()){
     
    if ($email == $row['email'] & $password==$row['password'])
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
    require 'user/homepage.php';
    $db = null;
}

else if ($flag==0) {
    
$rs = $db->prepare('SELECT * FROM admin');
$rs ->execute();
    while($row = $rs->fetch()){
        if ($email == $row['email'] && $password==$row['password'])
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
        require 'admin/adminhomepage.php';
        $db = null;
    }
    else if ($flag==0) {        
        require 'index.php';
        echo "<script type='text/javascript'>alert('Wrong Email or Password');</script>";
        $db = null;
    }
}   
?>