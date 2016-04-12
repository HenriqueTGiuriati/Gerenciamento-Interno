<section class="invoice">

<div class="row">
	<div class="col-xs-12">
	  <h2 class="page-header">
	    <i class="fa fa-folder-open"></i> Cadastro de membro
	  </h2>
	</div>
	<!-- /.col -->
</div>

<form role="form">
  <div class="box-body">
    <div class="col-md-4">
    	<div class="form-group">
	      <img class="profile-user-img img-responsive img-circle" src="<?= $this->config->base_url('assets/img/logo-large.png') ?>" alt="User profile picture">
         <center> <input type="file" id="exampleInputFile"></center>

          
        </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Nome</label>
	      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Endereço</label>
	      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Endereço">
	    </div>
	    
	    
  	</div>
  <!-- /.box-body -->
  </div>

  <div class="box-footer">
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </div>
</form>

</section>