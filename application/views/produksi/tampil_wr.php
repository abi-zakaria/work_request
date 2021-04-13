 <!-- Full Width Column -->
 <div class="content-wrapper">
  <div class="container"> 
   <br><br>
   <!-- Main content -->
   <section class="content">
     <div class="row">
      <div class="col-md-10">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Data Detail Work Request</h3>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form id="form-tambah-mesin" class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Silahkan Pilih Work Request</label>

                  <select class="form-control select2" name="no_detail" id="no_detail">
                    <option value=""></option>
                    <?php foreach ($wr as $w) : ?>
                      <option value="<?php echo $w['no_wr'] ?>">[<?php echo $w['no_wr']; ?>] - [<?php echo $w['no_mesin'] ?>] - [<?php echo $w['tanggal_wr'] ?>]</option>
                    <?php endforeach; ?>
                  </select>
                  <small class="form-text text-danger"><?php echo form_error('no_detail'); ?></small>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Lihat Work Request</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


