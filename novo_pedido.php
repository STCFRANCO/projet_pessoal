<?php

    session_start();
    if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
        exit;
        }
    $active_facturas="active";
    $active_productos="";
    $active_clientes="";
    $active_usuarios="";    
    $title="Novo Pedido";

    require_once ("config/db.php");
    require_once ("config/conexion.php");
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
            <h4><i class='glyphicon glyphicon-search'></i>Pedido Novo</h4>
            <div class="col-md-12">
                 <form class="form-horizontal" role="form" id="datos_factura">
          <div class="pull-right">
            <button type="button" class="btn yellow btn-outline btn-circle m-b-10" data-toggle="modal" data-target="#nuevoCliente"><span class="material-icons">face</span></button>
            <button type="button"class=" btn blue-bgcolor btn-outline btn-circle m-b-10" data-toggle="modal" data-target="#myModal"><span class="material-icons">add_shopping_cart</span></span></button>
            <button type="submit" class="btn red btn-outline btn-circle m-b-10"><span class="material-icons">print</span></button></div>
            <br>            
               <br>

        <?php 

            include("modal/buscar_productos.php");
            include("modal/registro_clientes.php");
            include("modal/registro_productos.php");
        ?>

            <br>    
             <form class="form-horizontal" role="form" id="datos_factura">
                <div class="form-group row">
                  <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
                  <div class="col-md-3">
                      <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
                      <input id="id_cliente" type='hidden'> 
                  </div>
                  <label for="tel1" class="col-md-1 control-label">Teléfono</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
                            </div>
          <label for="mail" class="col-md-1 control-label">Email</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
              </div>
         </div> 
            <div class="form-group row">
              <label for="empresa" class="col-md-1 control-label">Vendedor</label>
              <div class="col-md-3">
                <select class="form-control input-sm" id="id_vendedor">
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from users order by lastname");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_vendedor=$rw["user_id"];
                      $nombre_vendedor=$rw["firstname"]." ".$rw["lastname"];
                      if ($id_vendedor==$_SESSION['user_id']){
                        $selected="selected";
                      } else {
                        $selected="";
                      }
                      ?>
                      <option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
              <label for="tel2" class="col-md-1 control-label">Fecha</label>
              <div class="col-md-2">
                <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
              </div>
              <label for="email" class="col-md-1 control-label">Pago</label>
              <div class="col-md-3">
                <select class='form-control input-sm' id="condiciones">
                  <option value="1">Efectivo</option>
                  <option value="2">Cheque</option>
                  <option value="3">Transferencia bancaria</option>
                  <option value="4">Crédito</option>
                </select>
              </div>
            </div>

            
      </form> 
        <div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->          
        </div>
    </div>      
          <div class="row-fluid">
            <div class="col-md-12">
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
    <script type="text/javascript" src="js/VentanaCentrada.js"></script>
    <script type="text/javascript" src="js/nueva_factura.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
                        $("#nombre_cliente").autocomplete({
                            source: "./ajax/autocomplete/clientes.php",
                            minLength: 2,
                            select: function(event, ui) {
                                event.preventDefault();
                                $('#id_cliente').val(ui.item.id_cliente);
                                $('#nombre_cliente').val(ui.item.nombre_cliente);
                                $('#tel1').val(ui.item.telefono_cliente);
                                $('#mail').val(ui.item.email_cliente);
                                                                
                                
                             }
                        });
                         
                        
                    });
                    
    $("#nombre_cliente" ).on( "keydown", function( event ) {
                        if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
                        {
                            $("#id_cliente" ).val("");
                            $("#tel1" ).val("");
                            $("#mail" ).val("");
                                            
                        }
                        if (event.keyCode==$.ui.keyCode.DELETE){
                            $("#nombre_cliente" ).val("");
                            $("#id_cliente" ).val("");
                            $("#tel1" ).val("");
                            $("#mail" ).val("");
                        }
            }); 
    </script>

  </body>
</html>