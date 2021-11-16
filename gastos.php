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
    $active_productos="active";
    $active_clientes="";
    $active_usuarios="";    
    $title="Productos";
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
            
              <div class="btn-group pull-right"></div>

            <h4><i class='glyphicon glyphicon-search'></i>Produtos</h4>

             <div class="btn-group pull-right"></div>            
            <br>
            <?php
            include("modal/registro_productos.php");
            include("modal/editar_productos.php");
            ?>

               <form class="form-horizontal" role="form" id="datos_cotizacion">
                
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Código o Nome</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Código o producto" onkeyup='load(1);'>
                            </div>
                            <div class="col-md-3">
                                
                &nbsp;&nbsp;
              <button type="button" class="btn blue-bgcolor btn-outline btn-circle sm-5"  onclick='load(1);'>
                      <span class="material-icons">youtube_searched_for</span>
              </button> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <button type="button" class="btn purple btn-outline btn-circle margin-0" data-toggle="modal" data-target="#nuevoProducto">
                       <span class="material-icons">add_shopping_cart</span>
              </button>
                                <span id="loader"></span>
                            </div>
                            
                        </div>
                
                
                
            </form>
                <div id="resultados"></div><!-- Carga los datos ajax -->
                <div class='outer_div'></div><!-- Carga los datos ajax -->
            </div>
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
    <script type="text/javascript" src="js/productos.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script>
$( "#guardar_producto" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "ajax/nuevo_producto.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados_ajax_productos").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#resultados_ajax_productos").html(datos);
            $('#guardar_datos').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})

$( "#editar_producto" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "ajax/editar_producto.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados_ajax2").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#resultados_ajax2").html(datos);
            $('#actualizar_datos').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})

    function obtener_datos(id){
            var codigo_producto = $("#codigo_producto"+id).val();
            var nombre_producto = $("#nombre_producto"+id).val();
            var estado = $("#estado"+id).val();
            var precio_producto = $("#precio_producto"+id).val();
            $("#mod_id").val(id);
            $("#mod_codigo").val(codigo_producto);
            $("#mod_nombre").val(nombre_producto);
            $("#mod_precio").val(precio_producto);
            $("#mod_estado").val(estado);
        }
</script>

  </body>
</html>