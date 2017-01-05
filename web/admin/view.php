<html>
    <head>		
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <script type="text/javascript" src="/formValidation.js"></script>
    </head>   
   <body style="background:url('/images/foodismood.jpg')">
        <?php 
        require 'db.php';            
            $res = $db->prepare("SELECT * FROM restaurant");
            $res ->execute();
                
            while($row = $res->fetch()){
            ?>
                <form action="update.php" method="POST">
                    <button  type="submit" id="name" style="border:none;" ><?php echo $row['name']; ?></button>
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />
                    
                    <input type="hidden" id="active" name="active" value="<?php echo $row['active']; ?>" />
                    
                    <label id="telephone">Telephone:<?php echo $row['phone']?></label>
                    <br />
                    
                    <label id="address"><?php echo $row['address'].":".$row['details']; ?></label>
                    <br />
                    
                    <label id="cuie">Cuisine: <?php echo $row['cuisine']; ?></label>
                    <hr /> 
                   
                </form>
            <?php 
            }
            ?>       
</body>
</html>