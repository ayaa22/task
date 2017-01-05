<html>
<head>
    <title>Admin HomePage</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css" type="text/css"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="/formValidation.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
</head>
    <body class="body" style="background:url('/images/fastfood.jpg')">
	<div class="Header">
                    
            <button  style="margin-left: 2.5em" type="button" class="dropbtn">
            <span class="glyphicon glyphicon-home"></span> DashBoard</button>
            <button type="button" id="dropbtn" class="dropbtn">
            <span class="glyphicon glyphicon-plus"></span> New Restaurant</button>
            <div class="dropdown">
                <a type="button" class="dropbtn" href="admin/view.php">
                <span class="glyphicon glyphicon-cutlery"></span> Restaurants</a>
                <div class="dropdown-content">
                </div>               
            </div>
	</div>
        <form  action="admin/addedRestaurants.php"  method="POST">
            <div id="myModal" class="modal" >
            <div class="modal-content" style="background:url('images/foodismood.jpg')">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> 
                        <?php 
                            echo 'Add New Restaurant';    
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <label style="padding-right:50%;">Name:</label> <label>Phone:</label>
                    <br>
                    <input type="text" name="name" id="name" style="margin-right:34%;">          
                    <input type="text" name="phone" id="phone">
                    <br>
                    <label style="padding-right:48%;">Address:</label> <label>Address Details:</label>
                    <br>
                    <input type="text" name="address" id="address" style="margin-right:34%;">
                    <input type="text" name="addressDetails" id="addressDetails">
                    <br>
                    <label>Cuisine:</label>
                    <br>
                    <input type="text" name="cuisine" id="cuisine">
                    <input type="hidden" name="active" id="active" value="1">
                    <br>
                    <label><b>Menu</label>
                    <br>
                    <textarea name="menu" id="menu"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save" onclick="return validate()"></button>
                </div>
            </div>
            </div>
        </form>
   <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("dropbtn");
        var span = document.getElementsByClassName("btn btn-secondary")[0];
        var save=document.getElementsByClassName("btn btn-primary")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        save.onclick=function(){
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>       
</body>
</html>
