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
              <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_kry_mtn') ?>"></div>
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($karyawan_mtn as $kry ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $kry['nrp_mtn']; ?></td>
                    <td><?php echo $kry['nama_karyawan_mtn']; ?></td>
                    <td><center><img src="<?php echo base_url('upload/karyawan_mtn/'. $kry['foto']) ?>" width="70" /></center></td>
                    <td><?php echo $kry['shift']; ?></td>
                    <td><?php echo $kry['jabatan']; ?></td>
                    <td><?php echo $kry['id_section']; ?></td>
                    <td><?php echo $kry['section']; ?></td>                  
                    <td>
                      <a href="<?php echo base_url(); ?>karyawan_mtn/update_karyawan_mtn/<?php echo $kry['nrp_mtn']; ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                      <a href="<?php echo base_url(); ?>karyawan_mtn/hapusKryMtn/<?php echo $kry['nrp_mtn']; ?>" class="btn btn-xs btn-danger tombol-hapus-kry"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo base_url(); ?>cetak_excel/export_data_kry_mtn" class="btn btn-sm btn-success"><i class="fa fa-print"></i> <b>Cetak Data Karyawan To Excel</b></a>
             <a href="<?php echo base_url(); ?>cetak_pdf/laporan_pdf_kry_mtn" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> <b>Cetak Data Karyawan To PDF</b></a>
          </div>
        </div>
         
      </div>
    </div>
  </section>
</div>
</div>

