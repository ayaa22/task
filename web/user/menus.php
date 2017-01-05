<html>
    <head>		
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head> 
    <body style="background:url('/images/foodismood.jpg')">
        <?php
        require 'db.php';
        session_start();
        if(isset($_POST['ID'])){
            $ID = $_POST['ID'];
            
        }
        $res = $db->prepare("SELECT * FROM restaurant where ID= $ID ");
        $res ->execute();
        while($row = $res->fetch()){
        ?>                      
            <h3>El <?php echo $row['name']; ?> Menu</h3>
            <br />
            <label><?php echo nl2br ($row['menu'])?><br></label>
            <br/>
            <hr /> 
        <?php
        }
        ?>
    </body>
</html>
