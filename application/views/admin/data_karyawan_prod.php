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
              <h2 class="box-title"><b>Data Karyawan Produksi</b></h2>
              <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_kry_prod') ?>"></div>
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
                    <?php $no =1; foreach ($karyawan_prod as $kry ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $kry['nrp_prod']; ?></td>
                    <td><?php echo $kry['nama_karyawan']; ?></td>
                    <td><center><img src="<?php echo base_url('upload/karyawan_prod/'. $kry['foto']) ?>" width="70" /></center></td>
                    <td><?php echo $kry['shift']; ?></td>
                    <td><?php echo $kry['jabatan']; ?></td>
                    <td><?php echo $kry['id_section']; ?></td>
                    <td><?php echo $kry['section']; ?></td>                  
                    <td>
                      <a href="<?php echo base_url(); ?>karyawan_prod/update_karyawan_prod/<?php echo $kry['nrp_prod']; ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                      <a href="<?php echo base_url(); ?>karyawan_prod/hapusKryProd/<?php echo $kry['nrp_prod']; ?>" class="btn btn-xs btn-danger tombol-hapus-prod"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo base_url(); ?>cetak_excel/export_data_kry_prod" class="btn btn-sm btn-success"><i class="fa fa-print"></i> <b>Cetak Data Mesin To Excel</b></a>
            <a href="<?php echo base_url(); ?>cetak_pdf/laporan_pdf_kry_prod" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> <b>Cetak Data Karyawan To PDF</b></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

