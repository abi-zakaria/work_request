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
            <h3 class="box-title">Data Detail Work Request</h3>
          </div>
          <div class="box-body">
            <table>
              <tr>
                <td width="170">No Work Request</td>
                <td width="33">:</td>
                <td><?php echo $detail_wr['no_wr']; ?></td>
              </tr>

              <tr>
                <td>Tanggal Work Request</td>
                <td>:</td>
                <td><?php echo $detail_wr['tanggal_wr']; ?></td>
              </tr>

              <tr>
                <td>Jam Work Request</td>
                <td>:</td>
                <td><?php echo $detail_wr['jam_wr']; ?></td>
              </tr>

              <tr>
                <td>Id.Section</td>
                <td>:</td>
                <td><?php echo $detail_wr['id_section']; ?></td>
              </tr>

            </table>
            <hr>
            <table border="1" class="table table-striped table-bordered">
            
              <tr>
                <td colspan="4"><center>Detail Work Request</center></td>
              </tr>

              <tr>
                <td><center>No.Mesin</center></td>
                <td><center>Nama Mesin</center></td>
                <td><center>Problem</center></td>
                <td><center>PIC</center></td>
              </tr>

              <tr>
                <td><center><?php echo $detail_wr['no_mesin']; ?></center></td>
                <td><center><?php echo $detail_wr['nama_mesin']; ?></center></td>
                <td><center><?php echo $detail_wr['problem']; ?></center></td>
                <td><center><?php echo $detail_wr['nrp_prod']; ?> - <?php echo $detail_wr['nama_karyawan']; ?></center></td>
              </tr>
          
            </table>
          </div>

          <div class="box-footer">
              <a href="<?php echo base_url(); ?>cetak_pdf/laporan_pdf_wr/<?php echo $detail_wr['no_wr']; ?>" class="btn btn-success pull-right" target="_blank">Cetak Work Request</a>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


