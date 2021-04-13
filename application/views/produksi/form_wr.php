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
            <h3 class="box-title">Form Work Request</h3>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_wr') ?>"></div>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div id="berhasil_simpan"></div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="no_wr" id="no_wr" value="<?php echo $no_wr; ?>">
              </div>
              <div class="form-group">
                <label for="no_mesin" class="col-sm-2 control-label">No.Mesin</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="no_mesin" id="no_mesin" value="<?php echo $mesin['no_mesin']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="nama_mesin" class="col-sm-2 control-label">Nama Mesin</label>

                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_mesin" id="nama_mesin" value="<?php echo $mesin['nama_mesin']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Work Center</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="work_center" id="work_center" value="<?php echo $mesin['work_center']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Section</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" name="work_center" id="work_center" value="<?php echo $mesin['id_section']; ?>" disabled>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="work_center" id="work_center" value="<?php echo $mesin['section']; ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="work_center" class="col-sm-2 control-label">Tanggal dan Jam</label>

                <div class="col-sm-3">
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="tgl_wr" value="<?php echo $tanggal_wr; ?>">
                </div>
                </div>

                <div class="col-sm-2">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $jam_wr; ?>">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Problem</label>

                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" name="problem" id="problem"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('problem'); ?></small>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">PIC PROD</label>

                <div class="col-sm-4">
                  <select class="form-control select2" name="pic_prod" id="pic_prod">
                  <option value="">--PILIH PIC--</option>
                  <?php foreach ($prod as $prod) : ?>
                    <option value="<?php echo $prod['nrp_prod'] ?>"><?php echo $prod['nrp_prod'] ?> - <?php echo $prod['nama_karyawan'] ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?php echo form_error('pic_prod'); ?></small>
                </div>
              </div>
              
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Kirim Permintaan</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>
  </div>
</section>
</div>
</div>


