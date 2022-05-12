  <?php 
    include 'header_v.php'; 
    include 'sidebar_v.php'; 
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include 'breadcrumb_v.php' ?>
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="position:relative;">
                <h3 class="card-title">Webinar List</h3>
                <div style="position:absolute; right: 17%; top: 7px;">
                  <a href="<?php echo ($arr_url['dirname']) ? $arr_url['dirname'] . "/" : '/' ?>workshop_form.php" type="button" class="btn btn-danger btn-sm"><i class="fas fa-plus"></i> Add Webinar</a>
                </div>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Webinar</th>
                      <th>Workshop Name</th>
                      <th>Workshop Teacher</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Status</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Superkids</td>
                      <td>Mother's Day Card (ARTS)</td>
                      <td>Liang Jia</td>
                      <td>2022-05-07 12:00:00</td>
                      <td>2022-05-07 13:00:00</td>
                      <td><span class="badge badge-success badge-custom">Active</span></td>
                      <td>Premium</td>
                      <td>
                          <button type="button" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</button>
                      </td>
                    </tr> 
                    <tr>
                      <td>2</td>
                      <td>Superkids</td>
                      <td>Mother's Day Floating Dry Erase Marker(S.T.E.M.)</td>
                      <td>Li Fen</td>
                      <td>2022-05-07 12:00:00</td>
                      <td>2022-05-07 13:00:00</td>
                      <td><span class="badge badge-success badge-custom">Active</span></td>
                      <td>Premium</td>
                      <td>
                          <button type="button" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
    include 'footer_v.php';  
  ?>
</div>
<!-- ./wrapper -->
</body>
</html>
