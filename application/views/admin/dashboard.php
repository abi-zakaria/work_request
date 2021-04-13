
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <br><br>
    <!-- Main content -->
    <section class="content">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">PT.NOK INDONESIA</h3>
        </div>
        <div class="box-body">
          Selamat Datang Di Aplikasi Pengelolaan Work Order. <br>
          <!-- <table>
            <tr>
              <td width="100">Nrp</td>
              <td width="33">:</td>
              <td><?=$this->session->userdata('nrp_admin')?></td>
            </tr>

            <tr>
              <td>Username</td>
              <td>:</td>
              <td><?=$this->session->userdata('username_admin')?></td>
            </tr>

            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?=$this->session->userdata('nama_admin')?></td>
            </tr>

            <tr>
              <td>Hak Akses</td>
              <td>:</td>
              <td>Admin</td>
            </tr>
          </table> -->
          <hr>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $jml_mesin ?></h3>

                <p>Jumlah <br> Data Mesin</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>admin/data_mesin" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $jml_section ?></h3>

                <p>Jumlah <br> Data Section</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>section/data_section" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $jml_kry_mtn ?></h3>

                <p>Jumlah <br> Karyawan MTN</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>karyawan_mtn" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $jml_kry_prod ?></h3>

                <p>Jumlah <br> Karyawan PROD</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>karyawan_prod" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
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

