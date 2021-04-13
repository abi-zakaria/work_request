
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
              <h2 class="box-title"><b>Data Work Request Baru</b></h2>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover" id="data_mesin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Aksi</th> 
                    <th>No.WR</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>No.Mesin</th>
                    <th>Nama Mesin</th>          
                    <th>Problem</th>          
                    <th>PIC</th>                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($wr_baru as $data ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo base_url(); ?>work_request/WrDikerjakan/<?php echo $data['no_wr'] ?>">Kerjakan Work Request</a></li>
                          <li><a href="<?php echo base_url(); ?>work_request/PendingWr/<?php echo $data['no_wr'] ?>">Pending Work Request</a></li>
                        </ul>
                      </div>
                    </td>  
                    <td><?php echo $data['no_wr']; ?></td>
                    <td><?php echo $data['tanggal_wr']; ?></td>
                    <td><?php echo $data['jam_wr']; ?></td>
                    <td><?php echo $data['no_mesin']; ?></td> 
                    <td><?php echo $data['nama_mesin']; ?></td> 
                    <td><?php echo $data['problem']; ?></td> 
                    <td><?php echo $data['nrp_prod']; ?></td>                 
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

