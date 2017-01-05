<?php

require 'db.php';

if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['addressDetails'])){$addressDetails = $_POST['addressDetails'];}
if(isset($_POST['cuisine'])){$cuisine = $_POST['cuisine'];}
if(isset($_POST['menu'])){$menu = $_POST['menu'];}
if(isset($_POST['active'])){$active = $_POST['active'];}

$stmt=$db->prepare("INSERT INTO restaurant (name,phone, address,details,cuisine,menu,active) VALUES (:name, :phone, :address, :details, :cuisine, :menu, :active)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':details', $addressDetails);
$stmt->bindParam(':cuisine', $cuisine);
$stmt->bindParam(':menu', $menu);
$stmt->bindParam(':active', $active);
$stmt ->execute(); 
 require 'adminhomepage.php';
$dbh = null;
?>