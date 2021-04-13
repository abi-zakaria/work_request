 <!-- Full Width Column -->
 <div class="content-wrapper">
  <div class="container"> 
   <br><br>
   <!-- Main content -->
   <section class="content">
     <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Update Data User Production</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_user') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Nrp</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="nrp" id="nrp" value="<?php echo $prod['nrp']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Nama User</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $prod['nama']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-6">
                  <input type="text" class="form-control" name="username" id="username" value="<?php echo $prod['username']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-4">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                </div>
                <div class="col-md-4">
                  <span class="label label-info">Kosongkan Jika Tidak Ganti Password</span>
                </div>
              </div>
              
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


