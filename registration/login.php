<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<script>
	$(document).ready(function(){
    $("#login_user").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'../registration/server.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "../registration/index.php";
                    }else{
                        msg = "Parola sau username invalid!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
	  <div id="message"></div>
  </div>
	 
  <form id="loginform"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" id="txt_uname" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="txt_pwd">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
