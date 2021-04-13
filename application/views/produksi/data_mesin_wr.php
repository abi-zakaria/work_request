 <div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered table-hover" id="data_mesin">
      <thead>
        <tr>
          <th>No</th>
          <th>No.Mesin</th>
          <th>Nama Mesin</th>
          <th>Work Center</th>
          <th>Id.Section</th>
          <th>Section</th>          
          <th>Status</th>          
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php $no =1; foreach ($mesin as $msn ) : ?>
          <td><?php echo $no++; ?></td>
          <td><?php echo $msn['no_mesin']; ?></td>
          <td><?php echo $msn['nama_mesin']; ?></td>
          <td><?php echo $msn['work_center']; ?></td>
          <td><?php echo $msn['id_section']; ?></td>
          <td><?php echo $msn['section']; ?></td> 
          <td>
            <?php
            if($msn['status'] == "OK"){
              include('button_wr.php');
            }else{
              echo '<span class="label label-danger">UNDER REPAIR</span>';
            } ?>     
          </td>                   
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
