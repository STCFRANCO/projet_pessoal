<?php

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {

    require_once("libraries/password_compatibility_library.php");
}

require_once("config/db.php");

require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
   header("location: inicio.php");

} else {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Cantinho do Sabor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body{

	font-family: Arial, Helvetica, sans-serif;
	box-sizing: content-box;
}
.container{
	background-color: #f5f5f5;
	border-radius: 79px;
}
.Avatar{
	border-radius: 300px;
	border: 25px solid white;
	background-color: #457
}
footer {
    background-color: #f5f5f5;
    border-radius: 79px;

}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====================================================================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--====================================================================================================================================-->
	<link rel="stylesheet" href="css/style.css">
<!--====================================================================================================================================-->
	<title>Inicio de Sesion</title>
</head>
<body>
<div align="center"><a href="" target="_blank"><img src="img/arte3.jpg" width="300" height="150" class="img-fluid"></a></div>

			<?php

				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						    <strong>Error!</strong> 
						
						<?php 
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div> 
						<?php 
					}
				}
				?>
                <span id="reauth-email" class="reauth-email"></span>
		<div class="container"> <br>	<br>		
 	<div class="row">
    	<div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/arte3.jpg" width="450" height="450" class="Avatar" ></div>
    	<div class="col">

    	<form class="login100-form validate-form" method=post action=>
    		 <br> <br> <br>
				<h3 align="center">INICIAR SESSÃO</h3> <br>	
					<div class="container">
						<i class="fa fa-users"></i>
						<label for="">Usuario</label>
						<input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
						<br>
						<i class="fa fa-key"></i>
						<label for="">Senha</label>
						<input class="form-control" placeholder="Senha" name="user_password" type="password" value="" autocomplete="off" required>
					</div>
					<br>
					<div class="col">
						<button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Entrar</button>
					</div>

		</form>
		</div>
 	</div><br> <br>
 			<div class="panel-footer" style="text-align: center;"><a href="mailto:stxpservicio@gmail.com" class="btn btn-info btn-md" target="_blank">Assistência Técnica</a></div>
 	<br> 
</div> <br>
<footer  class="panel-footer" style="text-align: center;"> © 2020 Copyright<br> Desarrollado por: <a href="">ELIECER FRANCO</a>                                
</footer>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>	<script type="text/javascript">
		</script>
</body>
</html>

	<?php
}


