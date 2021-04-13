
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <br><br>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PT.NOK INDONESIA</h3>
              <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_wr') ?>"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             Selamat Datang Di Aplikasi Pengelolaan Work Order. <br>
             <hr>
             <div class="box-group" id="accordion">
              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Klik Disini Untuk Membuat Work Request
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="box-body">
                   <?php include('data_mesin_wr.php') ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content-wrapper -->

