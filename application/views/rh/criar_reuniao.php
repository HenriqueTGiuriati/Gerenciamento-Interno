<div class="row">
    <div class="col-sm-offset-2 col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Projetos Internos</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Diretoria:</label>

                <div class="input-group date">
                  <div class="input-group-addon">

                    <i class="fa fa-users"></i>
                     
                    
                    
                  </div>
                  <input type="text" class="form-control pull-right" id="diretoria">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Data:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="data">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Horário:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="horario">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              
              <a class="btn btn-success" onclick="salvar();">Salvar</a>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>

    </div>
<script src="<?= $this->config->base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>

 <script>
        $(function() {
            $( "#datepicker" ).datepicker();
          });
  </script> 

  <script>
  function salvar() {

        jQuery.ajax({
            url: "http://localhost/Gerenciamento-Interno/index.php/rh/salvar_reuniao",
            type: "post",
            dataType: 'json',
            data: {
                    diretoria: $('#diretoria').val(),
                    data: $('#data').val(),
                    horario: $('#horario').val(),
                    checkbox: $('#checkbox').isChecked(),
                },
            success: function (response) {
              if (response.status == 'OK') {
                  alert("Deu erro");
              }
                    
              else {
                    alert("deu certo");
              }
              
            }
        });
}
  </script>

