<html>
    <head>		
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head>   
    <body style="background-color:whitesmoke;">
        <?php 
        require 'db.php';
        session_start();
        if(isset($_POST['button'])){  
            if(isset($_POST['search'])){
                $search = $_POST['search'];
                $res = $db->prepare("SELECT * FROM restaurant where name LIKE '%{$search}%' and active=1");
                $res ->execute();
                while($row = $res->fetch()){
                ?>   
                <form action="menus.php" method="POST">                    
                    <button type="submit" id="submit"><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    <label>Telephone:<?php echo $row['phone']?></label>
                    <br />
                    <label><?php echo $row['address'].":".$row['details']; ?></label>
                    <br />
                    <label>Cuisine: <?php echo $row['cuisine']?></label>
                    <hr /> 
                </form>
                <?php
                }
                return;
            }
            
            $res = $db->prepare("SELECT * FROM restaurant where and active=1");
                $res ->execute();
                
                while($row = $res->fetch()){
                    ?>   
                ?>   
                <form action="menus.php" method="POST">
                    <button type="submit" id="submit"><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    <label>Telephone:<?php echo $row['phone']?></label>
                    <br />
                    <label><?php echo $row['address'].":".$row['details']; ?></label>
                    <br />
                    <label>Cuisine: <?php echo $row['cuisine']?></label>
                    <hr /> 
                </form>
                <?php
                return;
            }
        } 
        
         if(isset($_POST['explore'])){  
            
            if(isset($_POST['location'])&& isset($_POST['cuisine'])){
                $location = $_POST['location'];
                $cuisine = $_POST['cuisine'];
                $res = $db->prepare("SELECT * FROM restaurant where address LIKE '%{$location}%' and cuisine LIKE '%{$cuisine}%' and active= 1");
                $res ->execute();
                while($row = $res->fetch()){
                   ?>   
                <form action="menus.php" method="POST">
                    <button type="submit" id="submit"><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    <label>Telephone:<?php echo $row['phone']?></label>
                    <br />
                    <label><?php echo $row['address'].":".$row['details']; ?></label>
                    <br />
                    <label>Cuisine: <?php echo $row['cuisine']?></label>
                    <hr /> 
                </form>
                <?php
                return;
            }
            }           
            if(isset($_POST['location'])){
                $location = $_POST['location'];
                $res = $db->prepare("SELECT * FROM restaurant where address LIKE '%{$location}%' and active=1");
                $res ->execute();
                while($row = $res->fetch()){
                   ?>   
                <form action="menus.php" method="POST">
                    <button type="submit" id="submit"><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    <label>Telephone:<?php echo $row['phone']?></label>
                    <br />
                    <label><?php echo $row['address'].":". $row['details']; ?></label>
                    <br />
                    <label>Cuisine: <?php echo $row['cuisine']?></label>
                    <hr /> 
                </form>
                <?php
                return;
            }
            
            }
           if(isset($_POST['cuisine'])){
                $cuisine = $_POST['cuisine'];
                $res = $db->prepare("SELECT * FROM restaurant where cuisine LIKE '%{$cuisine}%' and active=1");
                $res ->execute();
                while($row = $res->fetch()){
                 ?>   
                <form action="menus.php" method="POST">
                    <button type="submit" id="submit"><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    <label>Telephone:<?php echo $row['phone']?></label>
                    <br />
                    <label><?php echo $row['address'].":".$row['details']; ?></label>
                    <br />
                    <label>Cuisine: <?php echo $row['cuisine']?></label>
                    <hr /> 
                </form>
                <?php
                return;
            }
         } 
         } 
       ?>
               
    </body>
</html>