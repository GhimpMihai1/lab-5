<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<script>
	$(register).ready(function(){
    $("#reg_user").click(function(){
        var username = $("#name").val().trim();
        var email = $("#email").val().trim();
		var password1 = $("#password").val().trim();
		var password2 = $("#password_1").val().trim();

        if( email != "" && password_1 != "" && password != "" && email != "" ){
            $.ajax({
                url:'../registration/server.php',
                type:'post',
                data:{email:email,password:password, username:username},
                success:function(response){
                    var msg = "Cont creat cu succes";
                    if(response == 1){
                        window.location = "../registration/index.php";
                    }else{
                        msg = "Verificati datele din nou!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form id="register"method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
</body>
</html>
