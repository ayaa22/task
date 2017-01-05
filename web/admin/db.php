<?php
      $dsn = 'mysql:dbname=restaurants;host=localhost;port=3306';
      $user = 'root';
      $password = '';
    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
       echo 'Connection failed: ' . $e->getMessage();}
    ?> 
