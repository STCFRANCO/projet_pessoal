
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
                    <a href="index.html">
                    <img alt="" src="assets/img/logo.png">
                    <span class="logo-default" >Ideal</span> </a>
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
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="far fa-bell"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
 
            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fas fa-envelope"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                  <img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                  <span class="from"> Sarah Smith </span>
                                                  <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                  <img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                  <span class="from"> John Deo </span>
                                                  <span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                  <img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                  <span class="from"> Rajesh </span>
                                                  <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                  <img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                  <span class="from"> Lina Smith </span>
                                                  <span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                  <img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                  <span class="from"> Jacob Ryan </span>
                                                  <span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
            <!-- start manage user dropdown -->
            <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> John </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
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
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-out-alt"></i> Log Out </a>
                                </li>
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
                          <a class="tooltips" href="user_profile.html" data-placement="top" data-original-title="Profile">
                            <i class="far fa-user"></i>
                          </a>
                          <a class="tooltips" href="email_inbox.html" data-placement="top" data-original-title="Mail">
                            <i class="far fa-envelope"></i>
                          </a>
                          <a class="tooltips" href="chat.html" data-placement="top" data-original-title="Chat">
                            <i class="fas fa-comments"></i>
                          </a>
                          <a class="tooltips" href="login.html" data-placement="top" data-original-title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                          </a>
                      </div>
                              </div>
                          </li>
                          <li class="menu-heading">
                        <span>Paniel Controle</span>
                      </li>
                              <li class="nav-item start">
                              <a href="#" class="nav-link nav-toggle">
                                  <i class="material-icons">group</i>
                                  <span class="title">Hospedes</span>
                                  
                              </a>
                              <ul class="sub-menu">
                                  <li class="nav-item">
                                      <a href="novo_hospedaje.php" class="nav-link ">
                                          <span class="title">Adicionar Novo</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="all_staffs.html" class="nav-link ">
                                          <span class="title">Veja todos os Convidados</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="edit_staff.html" class="nav-link ">
                                          <span class="title">Editar Hospedes</span>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link nav-toggle">
                                  <i class="material-icons">group</i>
                                  <span class="title">Cliente</span>
                                  
                              </a>
                              <ul class="sub-menu">
                                  <li class="nav-item">
                                      <a href="novo_cliente.php" class="nav-link ">
                                          <span class="title">Adicionar Novo</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="cliente.php" class="nav-link ">
                                          <span class="title">Veja todos os Convidados</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="edit_staff.html" class="nav-link ">
                                          <span class="title">Editar Clientes</span>
                                      </a>
                                  </li>
                              </ul>
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
                                <li><a class="parent-item" href="cliente.php">Clientes</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="novo_cliente.php">Novo Cliente</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                            </ol>
                        </div>
                    </div>

<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Dados do Cliente</header>
                                        <button id = "panel-button" 
                                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                           data-upgraded = ",MaterialButton">
                                           <i class = "material-icons">more_vert</i>
                                        </button>
                                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                           data-mdl-for = "panel-button">
                                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                        </ul>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-6 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtFirstName">
                                             <label class = "mdl-textfield__label">Nome Completo</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName">
                                             <label class = "mdl-textfield__label" >RG o CPF</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName">
                                             <label class = "mdl-textfield__label" >Telefone</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName">
                                             <label class = "mdl-textfield__label" >Edade</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName">
                                             <label class = "mdl-textfield__label" >Professiao</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20"> 
                                            <div class="form-group">
                                                <br>
                                                  <select class="form-control" id="sel1">
                                                    <option>Nacionalidade</option>
                                                    <option>Brasilero</option>
                                                    <option>Argentino</option>
                                                    <option>Peruano</option>
                                                    <option>Boliviano</option>
                                                    <option>Japones</option>
                                                    <option>Paraguayo</option>
                                                  </select>
                                                </div>
                                        </div>

                                        <div class="col-lg-2 p-t-20"> 
                                            <div class="form-group">
                                                <br>
                                                  <select class="form-control" id="sel1">
                                                    <option>Edo. Civil</option>
                                                    <option>Solterio</option>
                                                    <option>Casado</option>
                                                    <option>Divorciado</option>
                                                    <option>Viudo</option>
                                                  </select>
                                                </div>
                                        </div>

                                       
                                         <div class="col-lg-12 p-t-20 text-center"> 
                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-info">Salvar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
          </div>
  </div>
                               
            <!-- end page content -->
        </div>
            <!-- end chat sidebar -->
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