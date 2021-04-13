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
            <h2 class="box-title"><b>Data User MTN</b></h2>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_mtn') ?>"></div>
          </div>
          <div class="box-body">
            <table class="table table-striped table-bordered table-hover" id="data_mesin">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nrp</th> 
                  <th>Nama User</th>
                  <th>Username</th>        
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $no =1; foreach ($user_mtn as $mtn ) : ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $mtn['nrp']; ?></td>
                  <td><?php echo $mtn['nama']; ?></td>
                  <td><?php echo $mtn['username']; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>admin/update_mtn/<?php echo $mtn['nrp']; ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="<?php echo base_url(); ?>admin/hapus_mtn/<?php echo $mtn['nrp']; ?>" class="btn btn-xs btn-danger hapus-user"><i class="glyphicon glyphicon-trash"></i> Hapus</a>    
                  </td>           
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
</div>