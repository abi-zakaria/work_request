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
            <h3 class="box-title">Update Data Karyawan Maintenance</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_kry_mtn') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                
                <input type="hidden" name="nrp_mtn" id="nrp_mtn" value="<?php echo $karyawan_mtn->nrp_mtn ?>" />
              </div>
              <div class="form-group">
                <label for="nama karyawan" class="col-sm-2 control-label">Nama Karyawan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('nama_karyawan_mtn') ? 'is-invalid':'' ?>" name="nama_karyawan_mtn" id="nama_karyawan_mtn" value="<?php echo $karyawan_mtn->nama_karyawan_mtn ?>"/>
                  <small class="form-text text-danger"><?php echo form_error('nama_karyawan_mtn'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>" name="jabatan" id="jabatan" value="<?php echo $karyawan_mtn->jabatan ?>">
                  <div class="invalid-feedback">
                   <small class="form-text text-danger"><?php echo form_error('jabatan'); ?></small>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="shift" class="col-sm-2 control-label">Shift</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo form_error('shift') ? 'is-invalid':'' ?>" name="shift" id="shift" value="<?php echo $karyawan_mtn->shift ?>">
                  <small class="form-text text-danger"><?php echo form_error('shift'); ?></small>
                </div>
              </div>
    
              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Foto</label>

                <div class="col-sm-3">
                  <input type="file" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" name="foto" id="foto">
                  <input type="hidden" name="old_image" value="<?php echo $karyawan_mtn->foto ?>" />
                </div>
              </div>

              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Section</label>

                <div class="col-sm-9">
                 <select class="form-control <?php echo form_error('section') ? 'is-invalid':'' ?>" name="section" id="section">
                  <option value="<?php echo $karyawan_mtn->id_section ?>"><?php echo $karyawan_mtn->id_section ?></option>
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


