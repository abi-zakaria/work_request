
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <br><br>
    <!-- Main content -->
    <section class="content">

      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">PT.NOK INDONESIA</h3>
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_wr') ?>"></div>
        </div>
        <div class="box-body">
          Selamat Datang Di Aplikasi Pengelolaan Work Order. <br>
          <hr>

          <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3><?php echo $wr_baru ?></h3>

                    <p>Work Request<br> Baru Hari Ini</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/WrBaru" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $wr_dikerjakan ?></h3>

                    <p>Work Request <br> Dikerjakan Hari Ini</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/dataWrDikerjakan" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?php echo $wr_selesai ?></h3>

                    <p>Work Request <br> Selesai Hari Ini</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/dataWrSelesai" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3><?php echo $wr_pending ?></h3>

                    <p>Work Request <br> Pending (Semua)</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/dataWrPending" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

               <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $wr_pending_dikerjakan ?></h3>

                    <p>Work Request <br> Pending Dikerjakan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/dataWrPendingDikerjakan" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

               <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?php echo $wr_rekap_selesai ?></h3>

                    <p>Rekap <br> Work Request Selesai</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>work_request/dataRekapWrSelesai" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

