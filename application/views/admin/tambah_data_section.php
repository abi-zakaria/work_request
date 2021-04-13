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
            <h3 class="box-title">Tambah Data Section</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_section') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start --> 
          <center>
            <?php if($this->session->flashdata('flash_cek')) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Section
                <?php echo $this->session->flashdata('flash_cek'); ?>
              </div>
            <?php endif; ?>
          </center>
          <form id="form-tambah-section" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="id_section" class="col-sm-2 control-label">Id.Section</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="id_section" id="id_section" placeholder="Masukkan Id.Section">
                  <small class="form-text text-danger"><?php echo form_error('id_section'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="nama_section" class="col-sm-2 control-label">Nama Section</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="section" id="section" placeholder="Masukkan Nama Section">
                  <small class="form-text text-danger"><?php echo form_error('section'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="departemen" class="col-sm-2 control-label">Departemen</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="departemen" id="departemen" placeholder="Masukkan Nama Departemen">
                  <small class="form-text text-danger"><?php echo form_error('departemen'); ?></small>
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


