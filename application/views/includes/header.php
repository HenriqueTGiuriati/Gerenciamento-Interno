<!DOCTYPE html>
<html>
	
	<head>

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">

		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/bootstrap.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/AdminLTE.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/skins/_all-skins.min.css') ?>" />
     <link rel="stylesheet" href="<?= $this->config->base_url('assets/plugins/datepicker/datepicker3.css') ?>" />

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

		<title>Gerenciamento Interno</title>
	</head>

<body class="hold-transition skin-green fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>G.</b>Int</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Gerenciamento</b>Interno</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <ul class="nav navbar-nav">
          <li><a href="<?= $this->config->base_url('index.php/home/homepage') ?>"><i class="fa fa-home"> </i> Home</a></li>
            <li><a href="<?= $this->config->base_url('index.php/rh/') ?>"><i class="fa fa-users"> </i> RH</a></li>
            <li><a href="<?= $this->config->base_url('index.php/rh/avaliacao_usuario') ?>"><i class="fa fa-calendar-minus-o"> </i> Avaliação mensal</a></li>
            <li><a href="<?= $this->config->base_url('index.php/rh/criar_reuniao') ?>"><i class="fa fa-users"> </i> Criar reunião</a></li>
            <li><a href="<?= $this->config->base_url('index.php/rh/chamada') ?>"><i class="fa fa-list"> </i> Chamada</a></li>
            <li><a href="<?= $this->config->base_url('index.php/rh/horario_fixo') ?>"><i class="fa fa-clock-o"> </i> Horario fixo</a></li>
          </ul>

          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav"><!-- COMECO DO MENU -->
              <!-- Messages: style can be found in dropdown.less-->
              
              <li class="dropdown messages-menu"> <!-- ex botao de mensagens que aprece no canto direito do menu -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li> <!-- FIM ex botao de mensagens que aprece no canto direito do menu -->
              
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul> <!-- FIM DO MENU -->

          </div>
        </nav>
      </header>

      <!-- =============================================== -->


