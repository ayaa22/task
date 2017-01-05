<html>
    <head>		
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head>
    
    <body>
	<header id="banner" style="background:url('/images/fastfood.jpg')">				
            <h2>elmenus helps you decide what you eat</h2>      
            <div class="spotlight">
            <div class="content">
                <form  id="form" action="user/restaurants.php" method="POST">
                    <input type="text" id="search" name="search" autocomplete="on" value="What are you craving now ?" style="font-size: 15px;"><button id="but" type="submit" name="button">Search</button>
                    <br />
                    <hr /> 
                    <select id="location" name="location">
                    <?php
                        require 'db.php';
                        $res = $db->prepare('SELECT DISTINCT address FROM restaurant');
                        $res ->execute();
                        echo '<option value="Choose Location">Choose Location</option>';
                        while($row=$res ->fetch()){
                            $location= $row['address'];
                            echo '<option value="'.$location.'">'.$location.'</option>';    
                        }
                    ?>
                    </select> <select id="cuisine" name="cuisine">
                    <?php
                        require 'db.php';
                        $res = $db->prepare('SELECT DISTINCT cuisine FROM restaurant');
                        $res ->execute();
                        echo '<option value="Choose Cuisine">Choose Cuisine</option>';
                        while($row=$res ->fetch()){
                            $str= $row['cuisine'];
                            echo '<option value="'.$str.'">'.$str.'</option>';    
                        }
                    ?>
                    </select><button id="but"  name="explore" type="submit">Explore</button>
		</form>
            </div>
            </div>
	</header>
            <h2 style="margin-left: 420px;">DISCOVER BASED ON YOUR MOOD</h2>
            <form id="Form" action="user/restaurants.php" method="POST">
                <div class="image">                
                    <a href="#"><img id="icon" src="/images/foul.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/breakfast.jpg" style="float: left; width: 22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/chocolate-towers.jpg" style="float: left; width:21%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/burgers.jpg" style="float: left; width:20%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/icecream.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/shwarema.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/drive-in.jpg" style="float: left; width:21%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon" src="/images/healthy.jpeg" style="float: left; width:20%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <p style="clear: both;">
                </div>
            </form>    
        </body>
</html>