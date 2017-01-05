<html>
    <head>
        <meta charset="UTF-8">
        <title>El Menus Copy</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/reset.css">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://thecodeplayer.com/uploads/js/jquery.easing.min.js'></script>
        <script type="text/javascript" src="formValidation.js"></script>            
    </head>

    <body style="background-color: black"> 
        
        <div style="float:center;margin-left:100px"  class="container" ></div>
	<div style="float:center; margin-top:-200px" class="container">
       
        <!-- This is the form that appears in the home page and it used for the admin and user login-->
        
        <h1>Welcome</h1>
        <form  class="form" action="login.php" method="POST">
            <input type="text" id="email" name="email" value="E-mail">
            <input type="password" id="pass" name="pass" value="Password">
            <button type="submit" id="login-button" onclick='return loginValidate()'>Login</button><br><br>
            Don't registered yet ? SIGNUP as <a style="text-decoration:underline; cursor:pointer"  onclick='return usersignup()'>user</a>
            <br /> 
            <a  href="facebook/fbconfig.php" style="text-decoration:underline; cursor:pointer">Login With FaceBook</a>
	</form>        
	</div>
        
        <!--Signup form which is hidden by default and appears when user chooses to Register -->
        
        <form id="msform" name="myForm" class="hidden" method="POST" action="user/signup.php" style="height:346px;margin-top:-600px;margin-right:400px">
            <fieldset>
                <a onclick="exitform()" style="cursor:pointer;border-style:solid;color:black;float:right">X</a>
                <h2 id="usertext" ></h2>	
                <h3 class="fs-title">Create your account</h3>
                <hr> 
                <br>
                <h3 class="fs-title">Name</h3>
                <input  type="text" name="Name" id="Name"  required />

                <h3 class="fs-title">E-mail</h3>
                <input type="text" name="email" id="email" required />

                <h3 class="fs-title">Username</h3>
                <input  type="text" name="username" id="username"  required />

                <h3 class="fs-title">Password</h3>
                <input type="password" name="pass" id="pass" required  />

                <input type="submit" onclick=" return validateForm();" class="next action-button" value="subimt" />
            </fieldset>
        </form>   
</body>
</html>
