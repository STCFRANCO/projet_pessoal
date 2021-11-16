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
    $title="CANTINHO DO SABOR";

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
                                <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
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

          <div class="state-overview">
            <div class="row" >
                  <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-blue">
                      <span class="info-box-icon push-bottom"><i class="material-icons" ></a>style</i></span>
                      <div class="info-box-content">
                        <span class="info-box-text" >notas ficais</span>
                        <span class="info-box-number"></span>
                        <div class="progress">
                          <div class="progress-bar width-60"></div>
                        </div>
                        <span class="progress-description">
                              crear nova nota
                            </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-orange">
                      <span class="info-box-icon push-bottom"><i class="material-icons md-6">card_travel</i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Relatorios</span>
                        <span class="info-box-number"></span>
                        <div class="progress">
                          <div class="progress-bar width-60"></div>
                        </div>
                        <span class="progress-description">
                              ver relatorios
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-purple">
                      <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Clientes</span>
                        <span class="info-box-number"></span>
                        <div class="progress">
                          <div class="progress-bar width-60"></div>
                        </div>
                        <span class="progress-description">
                              Ver Clientes
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-success">
                      <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Produto</span>
                        <span class="info-box-number"><span></span>
                        <div class="progress">
                          <div class="progress-bar width-60"></div>
                        </div>
                        <span class="progress-description">
                          Novo Produto
                            </span>
                            
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                                      </div>
                  </div>

    <div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            
              <div class="btn-group pull-right"></div>

            <h4><i class='glyphicon glyphicon-search'></i>Pedidos</h4>


                <form class="form-horizontal" role="form" id="datos_cotizacion">
                
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">N' de Pedido</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Nome do cliente o # de Pedido" onkeyup='load(1);'>
                            </div>
                            
                            
                            
                            <div class="col-md-3">

                                 <button type="button" class="btn blue-bgcolor btn-outline btn-circle sm-5" onclick='load(1);'>
                                    <span class="material-icons">youtube_searched_for</span></button>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
              <a href="novo_pedido.php" class="btn purple btn-outline btn-circle margin-0" role="button" title='Novo Pedido'
                       class="icon-holder"><i class="material-icons f-left">content_paste</i>
              </a>                
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
    <script type="text/javascript" src="js/VentanaCentrada.js"></script>
    <script type="text/javascript" src="js/facturas.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
  </body>
</html>