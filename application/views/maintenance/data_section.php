
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
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover" id="data_mesin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id.Section</th>
                    <th>Nama Section</th>
                    <th>Departemen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $no =1; foreach ($section as $sect ) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $sect['id_section']; ?></td>
                    <td><?php echo $sect['section']; ?></td>
                    <td><?php echo $sect['departemen']; ?></td>
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

