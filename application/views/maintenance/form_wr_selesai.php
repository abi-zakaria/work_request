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
            <h3 class="box-title">Form Work Request DiSelesaikan</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_wr') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">No.Work Request</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="no_wr" id="no_wr" value="<?php echo $no_wr['no_wr']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="no_mesin" class="col-sm-2 control-label">No.Mesin</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="no_mesin" id="no_mesin" value="<?php echo $no_wr['no_mesin']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Nama Mesin</label>

                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_mesin" id="nama_mesin" value="<?php echo $no_wr['nama_mesin']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Work Center</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="work_center" id="work_center" value="<?php echo $no_wr['work_center']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Section</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" name="work_center" id="work_center" value="<?php echo $no_wr['id_section']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Tanggal dan Jam Selesai</label>

                <div class="col-sm-3">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" name="tgl_wr" value="<?php echo $tanggal_diselesaikan ?>">
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $jam_diselesaikan ?>">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Detail Penyebab</label>

                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" name="penyebab" id="penyebab"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('penyebab'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Penyelesaian</label>

                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" name="penyelesaian" id="penyelesaian"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('penyelesaian'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">PIC MTN</label>

                <div class="col-sm-4">
                  <select class="form-control select2" name="pic_mtn" id="pic_mtn">
                  <option value="">--PILIH PIC--</option>
                  <?php foreach ($mtn as $mtn) : ?>
                    <option value="<?php echo $mtn['nrp_mtn'] ?>"><?php echo $mtn['nrp_mtn'] ?> - <?php echo $mtn['nama_karyawan_mtn'] ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?php echo form_error('pic_mtn'); ?></small>
                </div>
              </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Work Request Selesai</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


