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
            <h2 class="box-title"><b>Data User Admin</b></h2>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_admin') ?>"></div>
          </div>
          <div class="box-body">
            <table class="table table-striped table-bordered table-hover" id="data_mesin">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nrp</th> 
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Level</th>         
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $no =1; foreach ($user_admin as $adm ) : ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $adm['nrp']; ?></td>
                  <td><?php echo $adm['nama']; ?></td>
                  <td><?php echo $adm['username']; ?></td>
                  <td><?php echo $adm['level']; ?></td>
                  <td>
                    <?php
                    if($adm['level'] == "SUPERADMIN"){
                      echo '<span class="label label-success">DEFAULT ADMIN</span>';
                    }else{
                      include('button_user_admin.php');
                    } ?>     
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