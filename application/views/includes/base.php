<?php
      $this->load->view('includes/header.php');
	  $this->load->view('includes/asside.php');
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php $this->load->view($content) ?>
        </section>

      <div class="control-sidebar-bg"></div>
      </div><!-- ./wrapper -->
<?php
      $this->load->view('includes/footer.php');
?>
