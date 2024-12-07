<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="user.css">
    <title>User Registration</title>
    
</head>
<body>
    
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
    
        </div>
    </nav>

<form name="formuser" action="user.php" method="post" onsubmit="return Validation()">
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- register form -------------------------->

        <div class="login-container" id="User Profile">
            <div class="top">
                
                <header><b>User Profile</b></header>
                 
            </div>
            <div class="two-forms">
                <div class="input-box">
                <input type="text" class="input-field" name="txtUserID" id="txtUserID" placeholder="User ID">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="txtUserFName" id="txtUserFName" placeholder="First Name">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="txtUserLName" id="txtUserLName" placeholder="Last Name">
                <i class="bx bx-user"></i>
            </div>
        </div>
         <div class="input-box">
                <input type="text" class="input-field" name="txtAddress" id="txtAddress" placeholder="Address">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="txtEmail" id="txtEmail" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
             <div class="input-box">
                <input type="text" class="input-field" name="txtPhone" id="txtPhone" placeholder="Contact Number">
                <i class="bx bx-phone"></i>
            </div>
            
            <div class="input-box">
                <input type="submit" class="submit" value="SUBMIT" onclick="Validation()">
            </div>
            
               
            </div>
        </div>
    </div>
</form>

<script type="text/javascript" onclick="Validation()">
    function Validation()
    {
        var msg="# Fix these errors #\n";
        var flag=0;

        if(document.getElementById("txtUserID").value=="")
        {
            msg=msg+"User ID can't be blank\n";
            flag=1;
        }

        if(document.getElementById("txtUserFName").value=="")
        {
            msg=msg+"First Name can't be blank\n";
            flag=1;
        }
        if(document.getElementById("txtUserLName").value=="")
        {
            msg=msg+"Last Name can't be blank\n";
            flag=1;
        }
        if(document.getElementById("txtAddress").value=="")
        {
            msg=msg+"Address can't be blank\n";
            flag=1;
        }
        if(document.getElementById("txtEmail").value=="")
        {
            msg=msg+"Please enter a valid email\n";
            flag=1;
        }
        if(document.getElementById("txtPhone").value=="")
        {
            msg=msg+"Please enter a phone number\n";
            flag=1;
        }
        if(flag==1)
        {
            alert(msg);
            return false; //Prevent form submission
        }
        return true; //Allow form submission
    }
</script>
</div>
</body>
</html>