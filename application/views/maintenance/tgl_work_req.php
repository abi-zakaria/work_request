 <!-- Full Width Column -->
 <div class="content-wrapper">
  <div class="container"> 
   <br><br>
   <!-- Main content -->
   <section class="content">
     <div class="row">
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Laporan Work Request Harian</h3>
          </div>
          <form id="" class="form-horizontal" action="<?php echo base_url().'mtn/wr_harian'; ?>" method="post">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal :</label> 

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" id="" name="tgl_wo">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Shift :</label> 

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-gear"></i>
                    </div>
                    <select class="form-control select2" name="shift_wo" id="shift_wo">
                      <option value="">--PILIH SHIFT--</option>
                      <option value="3A">3A</option>
                      <option value="3B">3B</option>
                      <option value="3C">3C</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>

              </div>
            </div>
            <div class="box-footer">
              <input type="submit" class="btn btn-info pull-right" value="Tampilkan">
              <!-- <button type="submit" class="btn btn-info pull-right">Tampilkan</button> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


