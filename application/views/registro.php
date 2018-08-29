<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/login.css">
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
                        <form id="reg-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nombre:</label><br>
                                <input type="text" name="nombre" id="nombre" class="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Apellido:</label><br>
                                <input type="text" name="apellido" id="apellido" class="required">
                            </div>
                                <div class="form-group">
                                <label for="password" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Telefono:</label><br>
                                <input type="tel" name="telefono" id="Telefono" class="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="" name="password" id="password" class="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Escriba nuevamente su Password :</label><br>
                                <input type="password" name="password1" id="password1" class="required" onblur="validate_password()">
                            </div>
                            <input type="hidden" name="rol" value="user">
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="button" id="submit" onclick="validate_form()" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <!--<a href="#" class="text-info">Register here</a>-->
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
function validate_form()
 {
    if($('#nombre').val()==''||$('#apellido').val()==''||$('#email').val()==''||$('#Telefono').val()==''||$('#username').val()==''||$('#password').val()=='')
    {
        alert('Todos los capos deben ser llenados');
    }
    else
    {

        var url = "<?php echo site_url();?>/Registro/Registro_usuarios";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#reg-form").serialize(), 
           success: function(data)             
           {
                if(data!=0)
                {
                    alert('Datos ingresados correctamente');
                }
                else
                {
                    // location.replace("<?php echo site_url(); ?>/Welcome");
                    alert('f%ck U');
                }
            }
        });
    } 
    function validate_password(){
        if($("#password").val()!=$("#password1").val()){
            alert('Passwords no coinciden');
            ("#password").val('');
            ("#password1").val('');
        }

    }  //ajax
}
 
</script>
        