<?php

require 'db.php';

if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['details'])){$details = $_POST['details'];}
if(isset($_POST['cuisine'])){$cuisine = $_POST['cuisine'];}
if(isset($_POST['menu'])){$menu = $_POST['menu'];}
if(isset($_POST['active'])){$active = $_POST['active'];}
if(isset($_POST['ID'])){$ID = $_POST['ID'];}
if(isset($_POST['edit'])){
    $stmt=$db->prepare("UPDATE `restaurant` SET `name`= :name,`phone`= :phone, `address`= :address,`details`= :details,`cuisine`= :cuisine,`menu`= :menu,`active`= :active WHERE `ID`= :ID");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':details', $details);
    $stmt->bindParam(':cuisine', $cuisine);
    $stmt->bindParam(':menu', $menu);
    $stmt->bindParam(':active', $active);
    $stmt->bindParam(':ID', $ID);
    $stmt ->execute(); 
    echo"<script type='text/javascript'>alert(' Restaurant info was updated successfully!')</script>;";
    require 'adminhomepage.php';
    $db = null;   
    return;       
}
if(isset($_POST['delete'])){
    $stmt=$db->prepare("UPDATE `restaurant` SET `active`= 0 WHERE `ID`= :ID");
    $stmt->bindParam(':ID', $ID);
    $stmt ->execute(); 
    require 'adminhomepage.php';
    echo"<script type='text/javascript'>alert(' Restaurant was Deleted successfully!')</script>;";
    $db = null;   
    return;       
}

?>