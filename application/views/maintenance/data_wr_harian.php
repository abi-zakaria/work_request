
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <br><br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title"><b>Data Work Request Harian</b></h2>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover" id="data_mesin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No.WR</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>No.Mesin</th>
                    <th>Nama Mesin</th>          
                    <th>Detail Penyebab</th>          
                    <th>Penyelesaian</th>                   
                    <th>PIC</th>                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($wr_harian as $data ) : ?>
                    <td><?php echo $no++; ?></td>  
                    <td><?php echo $data['no_wr']; ?></td>
                    <td><?php echo $data['tanggal_selesai']; ?></td>
                    <td><?php echo $data['jam_selesai']; ?></td>
                    <td><?php echo $data['no_mesin']; ?></td> 
                    <td><?php echo $data['nama_mesin']; ?></td> 
                    <td><?php echo $data['detail_penyebab']; ?></td> 
                    <td><?php echo $data['penyelesaian']; ?></td>                 
                    <td><?php echo $data['nrp_mtn']; ?></td>                 
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo base_url().'cetak_pdf/work_req_harian_pdf/?tgl_wr='.set_value('tgl_wo').'&shift='.set_value('shift_wo') ?>" target="_blank" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> <b>Cetak Work Request Harian To PDF</b></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

