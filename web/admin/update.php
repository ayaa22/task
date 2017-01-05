<html>
    <head>		
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script type="text/javascript" src="formValidation.js"></script>
    </head>   
   <body style="background:url('images/foodismood.jpg')">

       <?php
if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
    require 'db.php';            
    $res = $db->prepare("SELECT * FROM restaurant where ID= $ID ");
    $res ->execute();              
    while($row = $res->fetch()){
    ?>
       <form action="updateAndDelete.php" method="POST">
          
                    <label>Name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"></input>
                    <br />
                    
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" />                    
                    <input type="hidden" id="active" name="active" value="<?php echo $row['active']; ?>" />
                    
                    <label>Telephone:</label>
                    <input name="phone" id="phone"value="<?php echo $row['phone']?>"></input>
                    <br />
                    
                    <label>Address:</label>
                    <input  name="address" id="address" value="<?php echo $row['address']; ?>"></input>
                    <br />
                    
                    <label>Address Details:</label>
                    <input name="details" id="details" value="<?php echo $row['details']; ?>"></input>
                    <br />
                    
                    <label>Cuisine:</label>
                    <input name="cuisine" id="cuisine" value="<?php echo $row['cuisine']; ?>"></input>
                    <br /> 
                    
                    <label>Menu:</label>
                    <input type="text" name="menu" id="menu" value="<?php echo nl2br ($row['menu']); ?>" />
                    <br />
                     <button type="submit" name="edit" id="edit" onclick='return validate()'>Edit</button>
                     <button type="submit" name="delete" id="delete">Delete</button><br><br>
                </form>
            <?php 
          }}          
?>       
</body>
</html>
