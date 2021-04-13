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
            <h3 class="box-title">Tambah Data User</h3>
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
                  <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Masukkan Nrp">
                  <small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Nama User</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama User">
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                  <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                  <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Akses</label>

                <div class="col-sm-9">
                 <select class="form-control" name="akses" id="akse">
                  <option value="">--PILIH AKSES--</option>
                    <option value="ADMIN">ADMIN</option>   
                    <option value="MTN">MAINTENANCE</option>   
                    <option value="PROD">PROD</option>   
                </select>    
                <small class="form-text text-danger"><?php echo form_error('akses'); ?></small>               
              </div>
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="reset" class="btn btn-default">Batal</button>
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


