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
              <h2 class="box-title"><b>Data Karyawan Maintenance</b></h2>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover" id="data_mesin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nrp</th>
                    <th>Nama Karyawan</th>
                    <th>Foto</th>
                    <th>Shift</th>
                    <th>Jabatan</th>
                    <th>Id.Section</th>
                    <th>Section</th>          
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($kry_mtn as $kry ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $kry['nrp_mtn']; ?></td>
                    <td><?php echo $kry['nama_karyawan_mtn']; ?></td>
                    <td><center><img src="<?php echo base_url('upload/karyawan_mtn/'. $kry['foto']) ?>" width="70" /></center></td>
                    <td><?php echo $kry['shift']; ?></td>
                    <td><?php echo $kry['jabatan']; ?></td>
                    <td><?php echo $kry['id_section']; ?></td>
                    <td><?php echo $kry['section']; ?></td>                  
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>         
      </div>
    </div>
  </section>
</div>
</div>

