<?php

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }

	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$active_facturas="";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$active_perfil="active";	
	$title="Configuración | Simple Invoice";
	
	$query_empresa=mysqli_query($con,"select * from perfil where id_perfil=1");
	$row=mysqli_fetch_array($query_empresa);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <?php include("head.php");?>
  </head> 

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">

      
        
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="inicio.php">
                    <img alt="" src="">
                    <span class="logo-default" ></span> </a>
                </div>
                <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
          <li><a href="#" class="menu-toggler sidebar-toggler"><i class="fas fa-bars"></i></a></li>
        </ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="fas fa-search"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                           
                              
                       <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> John </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="perfil.php">
                                        <i class="far fa-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-cog"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-map-signs"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="fas fa-lock"></i> Lock
                                    </a>
                                </li>
                                <li><a href="login.php?logout"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
                            </ul>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
      <!-- start sidebar menu -->
      <div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                  <div id="remove-scroll">
                      <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                         
                          <li class="sidebar-user-panel">
                              <div class="user-panel">
                                  <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> ELIECER FRANCO</div>
                                            <div class="profile-usertitle-job"> Manager </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
                          <a class="tooltips" href="perfil.php" data-placement="top" data-original-title="Profile">
                            <i class="far fa-user"></i>
                          </a>
                          <a class="tooltips" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&osid=1&service=mail&ss=1&ltmpl=default&rm=false&flowName=GlifWebSignIn&flowEntry=ServiceLogin" data-placement="top" data-original-title="Mail">
                            <i class="far fa-envelope"></i>
                          </a>
                          <a class="tooltips" href="chat.html" data-placement="top" data-original-title="Chat">
                            <i class="fas fa-comments"></i>
                          </a>
                          <a class="tooltips" href="login.php?logout" data-placement="top" data-original-title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                          </a>
                      </div>
                              </div>
                          </li>
                          <li class="menu-heading">
                        <span>Paniel Controle</span>
                      </li>
                          <li class="nav-item">
                              <a href="clientes.php" class="nav-link nav-toggle">
                                 <i class="fas fa-user-tie"></i>
                                  <span class="title">Cliente</span>
                                  
                              </a>
                          </li>
                           <li class="nav-item start">
                              <a href="productos.php" class="nav-link nav-toggle">
                                  <i class="fas fa-shopping-basket"></i>
                                  <span class="title">Produtos</span>
                                  
                              </a>
                          </li>  
                          <li class="nav-item start">
                              <a href="compras.php" class="nav-link nav-toggle">
                                  <i class="fas fa-shopping-bag"></i>
                                  <span class="title">Compras</span>
                                  
                              </a>
                          </li> 
                          <li class="nav-item start">
                              <a href="gastos.php" class="nav-link nav-toggle">
                                  <i class="far fa-chart-bar"></i>
                                  <span class="title">Gastos</span>
                                  
                              </a>
                          </li> 
                          <li class="nav-item start">
                              <a href="reporte.php" class="nav-link nav-toggle">
                                  <i class="fas fa-chart-line"></i>
                                  <span class="title">Relatorios</span>
                                  
                              </a>
                          </li> 
                        </ul>
                    </div>
                </div>
            </div>
             

    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li>
                                    <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="inicio.php">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                                                
                            </ol>
                        </div>
                    </div>

        <div class="container">
          <div class="panel panel-info">
      <div class="panel-heading">
          <h3 class="panel-title text-right"><span class="material-icons">
settings
</span> Config. de Perfil</h3>
  <div class="row">
    <div class="col-sm-6">
       <div id="load_img">
          <img class="img-responsive" src="<?php echo $row['logo_url'];?>" alt="Logo">
          
        </div>
        <div class="row-center">
              <div class="col-md-6">
              <div class="form-group">
                   <input class='filestyle'data-buttonText="Agregar" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
              </div>  
            </div>
            
          </div>
          <div class="col-md-12">
   <div class="form-group">      
              <h2 class="section-title">Sobre Nós</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
              </p>
            </div>

    </div>



    </div>
    
    <div class="col-sm-6">
     <div class="form-group">
                        
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombre de la empresa:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre_empresa" value="<?php echo $row['nombre_empresa']?>" required></td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td><input type="text" class="form-control input-sm" name="telefono" value="<?php echo $row['telefono']?>" required></td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email" class="form-control input-sm" name="email" value="<?php echo $row['email']?>" ></td>
                      </tr>
            <tr>
                        <td>IVA (%):</td>
                        <td><input type="text" class="form-control input-sm" required name="impuesto" value="<?php echo $row['impuesto']?>"></td>
                      </tr>
            <tr>
                        <td>Simbolo de moneda:</td>
                        <td>
              <select class='form-control input-sm' name="moneda" required>
                    <?php 
                      $sql="select name, symbol from  currencies group by symbol order by name ";
                      $query=mysqli_query($con,$sql);
                      while($rw=mysqli_fetch_array($query)){
                        $simbolo=$rw['symbol'];
                        $moneda=$rw['name'];
                        if ($row['moneda']==$simbolo){
                          $selected="selected";
                        } else {
                          $selected="";
                        }
                        ?>
                        <option value="<?php echo $simbolo;?>" <?php echo $selected;?>><?php echo ($simbolo);?></option>
                        <?php
                      }
                    ?>
              </select>
            </td>
                      </tr>
            <tr>
                        <td>Dirección:</td>
                        <td><input type="text" class="form-control input-sm" name="direccion" value="<?php echo $row["direccion"];?>" required></td>
                      </tr>
            <tr>
                        <td>Ciudad:</td>
                        <td><input type="text" class="form-control input-sm" name="ciudad" value="<?php echo $row["ciudad"];?>" required></td>
                      </tr>
            <tr>
                        <td>Región/Provincia:</td>
                        <td><input type="text" class="form-control input-sm" name="estado" value="<?php echo $row["estado"];?>"></td>
                      </tr>
            <tr>
                        <td>Código postal:</td>
                        <td><input type="text" class="form-control input-sm" name="codigo_postal" value="<?php echo $row["codigo_postal"];?>"></td>
                      </tr>
                   
                        
                      </tbody>                
                  
                </div>           
          </div>
        </div>
    </form>
      </div>
                  
                </div>
    </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>


                      
	<?php
	include("footer.php");
	?>
  </body>
</html>
<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
<script>
$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})





		
</script>

<script>
		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "ajax/imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
				}
				
				
			}
    </script>

