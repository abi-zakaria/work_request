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
            <h3 class="box-title">Tambah Data Karyawan Produksi</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_kry_prod') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <center>
            <?php if($this->session->flashdata('flash_cek')) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Karyawan Production
                <?php echo $this->session->flashdata('flash_cek'); ?>
              </div>
            <?php endif; ?>
          </center>
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                <label for="no_mesin" class="col-sm-2 control-label">Nrp</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Masukkan NRP Karyawan">
                  <small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="jabatan" class="col-sm-2 control-label">Nama Karyawan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" placeholder="Masukkan Nama Karyawan">
                  <small class="form-text text-danger"><?php echo form_error('nama_karyawan'); ?></small>
                </div>
              </div>
              <div class="form-group">
                <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan Karyawan">
                  <small class="form-text text-danger"><?php echo form_error('jabatan'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="shift" class="col-sm-2 control-label">Shift</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="shift" id="shift" placeholder="Masukkan Shift Karyawan">
                  <small class="form-text text-danger"><?php echo form_error('shift'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Foto</label>

                <div class="col-sm-3">
                  <input type="file" class="form-control-file" name="foto" id="foto">
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


