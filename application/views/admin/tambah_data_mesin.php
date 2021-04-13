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
            <h3 class="box-title">Tambah Data Mesin</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_mesin') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <br/>
          <center>
            <?php if($this->session->flashdata('flash_cek')) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                No Mesin
                <?php echo $this->session->flashdata('flash_cek'); ?>
              </div>
            <?php endif; ?>
          </center>
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                <label for="no_mesin" class="col-sm-2 control-label">No.Mesin</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="no_mesin" id="no_mesin" placeholder="Masukkan No.Mesin">
                  <small class="form-text text-danger"><?php echo form_error('no_mesin'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Nama Mesin</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_mesin" id="nama_mesin" placeholder="Masukkan Nama Mesin">
                  <small class="form-text text-danger"><?php echo form_error('nama_mesin'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Work Center</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="work_center" id="work_center" placeholder="Masukkan No Work Center">
                  <small class="form-text text-danger"><?php echo form_error('work_center'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Section</label>

                <div class="col-sm-9">
                 <select class="form-control select2" name="section" id="section">
                  <option value="">--PILIH SECTION--</option>
                  <?php foreach ($section as $sect) : ?>
                    <option value="<?php echo $sect['id_section']; ?>"><?php echo $sect['section'] ?></option>
                  <?php endforeach; ?>
                </select>    
                <small class="form-text text-danger"><?php echo form_error('section'); ?></small>               
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


