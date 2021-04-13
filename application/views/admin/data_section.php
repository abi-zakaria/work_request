
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
              <h2 class="box-title"><b>Data Section</b></h2>
              <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_section') ?>"></div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover" id="data_mesin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id.Section</th>
                    <th>Nama Section</th>
                    <th>Departemen</th>        
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($section as $sect ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $sect['id_section']; ?></td>
                    <td><?php echo $sect['section']; ?></td>
                    <td><?php echo $sect['departemen']; ?></td>                  
                    <td>
                      <a href="<?php echo base_url(); ?>section/update_section/<?php echo $sect['id_section']; ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                      <a href="<?php echo base_url(); ?>section/hapus_section/<?php echo $sect['id_section']; ?>" class="btn btn-xs btn-danger tombol-hapus-sect"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo base_url(); ?>cetak_excel/export_data_section" class="btn btn-sm btn-success"><i class="fa fa-print"></i> <b>Cetak Data Section To Excel</b></a>
            <a href="<?php echo base_url(); ?>cetak_pdf/laporan_pdf_section" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> <b>Cetak Data Section To PDF</b></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

