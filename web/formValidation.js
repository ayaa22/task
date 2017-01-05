//Shows the signup Form in index file
function usersignup() {
    $("#msform").show();
    $("#usertext").replaceWith("<h3 id='usertext' class='fs-subtitle'>USER SIGNUP</h3>"); 
            
}
// Validate missing fields for login
function loginValidate() {
    if($("#email").val()=='') {
        alert("Email is required");
        return false; 
    }
    if($("#pass").val()=='') {
        alert("Password is required");               
        return false;
    }
}
// Validate input fields for the signup form 
function validateForm() {
    var email = email = document.myForm.email;
    
    if($("#Name").val()==='') {
        alert("Name is required");
        return false;
    }
    if($("#email").val()==='') {
        alert("E-mail is required");
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        alert("Please enter a valid e-mail address.");
        return false;
    }

    if (email.value.indexOf(".", 0) < 0)
    {
        alert("Please enter a valid e-mail address.");
        return false;
    }
    if($("#username").val()==='') {
        alert("UserName is required");
        return false;
    }
    if($("#pass").val()==='') {
        alert("Password is required");
        return false;
    }
}
// hides the signup form on pressing Close button
function exitform(){
    $("#msform").hide();
}
// validates the form used in enter new restaurant data
function validate() {
    
    if($("#name").val()==='') {
        alert("Name is required");
        return false;
    }
    if($("#phone").val()==='') {
        alert("Phone is required");
        return false;
    }
    if($("#address").val()==='') {
        alert("Adress is required");
        return false;
    }
    if($("#addressDetails").val()==='') {
        alert("More Details about the Address is required");
        return false;
    }
    if($("#cuisine").val()==='') {
        alert("Cuisine is required");
        return false;
    }
    if($("#menu").val()==='') {
        alert("Menu is required");
        return false;
    }
    
}
