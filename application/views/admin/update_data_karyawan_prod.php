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
            <h3 class="box-title">Update Data Karyawan Produksi</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_kry_prod') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                
                <input type="hidden" name="nrp" id="nrp" value="<?php echo $karyawan_prod->nrp_prod ?>" />

              <div class="form-group">
                <label for="nama karyawan" class="col-sm-2 control-label">Nama Karyawan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('nama_karyawan') ? 'is-invalid':'' ?>" name="nama_karyawan" id="nama_karyawan" value="<?php echo $karyawan_prod->nama_karyawan ?>"/>
                  <small class="form-text text-danger"><?php echo form_error('nama_karyawan'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>" name="jabatan" id="jabatan" value="<?php echo $karyawan_prod->jabatan ?>">
                  <div class="invalid-feedback">
                    <?php echo form_error('jabatan'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="shift" class="col-sm-2 control-label">Shift</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('shift') ? 'is-invalid':'' ?>" name="shift" id="shift" value="<?php echo $karyawan_prod->shift ?>">
                  <small class="form-text text-danger"><?php echo form_error('shift'); ?></small>
                </div>
              </div>
    
              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Foto</label>

                <div class="col-sm-3">
                  <input type="file" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" name="foto" id="foto">
                  <input type="hidden" name="old_image" value="<?php echo $karyawan_prod->foto ?>" />
                </div>
              </div>

              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Section</label>

                <div class="col-sm-9">
                 <select class="form-control <?php echo form_error('section') ? 'is-invalid':'' ?>" name="section" id="section">
                  <option value="<?php echo $karyawan_prod->id_section ?>"><?php echo $karyawan_prod->id_section ?></option>
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


