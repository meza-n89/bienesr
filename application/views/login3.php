<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url();?>css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script src="<?php echo base_url();?>/js/jquery.min.js"></script>

</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="button" id="submit" onclick="aa()" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo site_url();?>/Registro/registro_view" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

       
</body>
</html>

 <script type="text/javascript">
  function aa()
  {
       alert('entró');
        var url = "<?php echo site_url();?>/Login/validate_login";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#login-form").serialize(), 
           success: function(data)             
           {
                switch(data)
                {
                    case '0':
                        alert('El usuario o la contraseña es incorrecto');
                    break;
                    case '1':
                        location.href='<?php echo site_url();?>/Dashboard';
                    break;
                    case '2':
                        location.href='<?php echo site_url();?>/Login/dshuser_view';
                    break;
                   
                }
            }
        });
 }
</script>
        