<!DOCTYPE html>
<html>
	
	<head>

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">

		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/bootstrap.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/AdminLTE.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/skins/_all-skins.min.css') ?>" />

		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/plugins/iCheck/square/blue.css') ?>">

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<title>Gerenciamento Interno</title>
	</head>

<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><img src="<?= $this->config->base_url('assets/img/logo-large.png') ?>" /> </a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"></p>
        <form action="index.php/home/homepage" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Lembrar-me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-success btn-block btn-flat">Acessar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">Esqueci minha senha</a><br>
        <a href="register.html" class="text-center">Registrar</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= $this->config->base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= $this->config->base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= $this->config->base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>