<?php 
	include_once'signupcon.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>sign_up</title>
    
   
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="sign">
                <h2>Sign up</h2>
        </div>
        <form  method="post" action="signup_details.php">
            <div class="input-group">
                <p>   First Name</p>
                <input type="text" name="first_name" placeholder="First Name">
            </div>  
            <div class="input-group">          
                    <p>   Last Name</p>
                    <input type="text" name="last_name" placeholder="Last Name">
            </div>
            <div class="input-group">
                <p>  User Name</p>
                <input type="text" name="user_name" placeholder="User name">
            </div>

            <div class="input-group">
			    <p> Email</p>
                <input type="email" name="user_mail_id" placeholder="Email Id">
            </div>

            <div class="input-group">
                <p> Password</p>
                <input type="password" name="password" placeholder="password" id="pass" >
            </div>
            <div class="input-group">
			    <p>  Confirm Password</p>
                <input type="password" name="confirm_pass" placeholder="Password" id="cnfirm_pass">
            </div>
            
            <div class="input-group">
                <input  type="checkbox" required>I agree with all terms and condition.
            </div> 
            

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            
		</form>
    </div>

</body>


</html>