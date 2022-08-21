<?php 
    require 'header_v.php'; 
    include 'sidebar_v.php'; 

    $whereSql = "";
    $orderby = " ORDER BY created_at DESC";

    // $whereSql .= ($where == '' ? " WHERE " : " AND ") . " status = 'active'";    

    if($_POST['webinar_search'] && $_POST['webinar_search'] != '')
    {
      $whereSql .= ($where == '' ? " WHERE " : " AND ") . " `webinar_name` LIKE '%" . trim(addslashes($_POST['webinar_search'])) . "%'";
    }
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
                <div style="position:absolute; right: 23%; top: 7px;">
                  <a href="<?php echo ($arr_pathinfo['dirname']) ? $arr_pathinfo['dirname'] . "/" : '/' ?>webinar_form.php" type="button" class="btn btn-danger btn-sm"><i class="fas fa-plus"></i> Add Webinar</a>
                </div>
                <div class="card-tools" style="position: absolute;right: 8.5%;">
                  <form action="webinar_list.php" method="post">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="webinar_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div style="position:absolute; right: 1%; top: 7px;">
                  <a href="webinar_list.php" type="button" class="btn btn-light btn-sm">Reset</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Webinar Name</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql_query = "SELECT * FROM tbl_webinar " . $whereSql . $orderby;
                    echo $sql_query;
                    $result = $conn->query($sql_query);
                    if($result->num_rows > 0)
                    {
                      $count = 0;
                      foreach($result as $val){
                         
                        ?>
                           <tr>
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo isset($val['webinar_name']) ? $val['webinar_name'] : '' ?></td>
                            <td><?php echo (isset($val['start_date']) &&  $val['start_date'] != '0000-00-00 00:00:00')? date('d-m-Y H:i:s', strtotime($val['start_date'])) : '' ?></td>
                            <td><?php echo (isset($val['end_date']) &&  $val['end_date'] != '0000-00-00 00:00:00') ? date('d-m-Y H:i:s', strtotime($val['end_date'])) : '' ?></td>
                            <td>
                                  <?php 
                                    if(isset($val['status']) && $val['status'] == 'active')
                                    {
                                      ?>
                                        <span class="badge badge-success badge-custom">Active</span>
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                         <span class="badge badge-danger badge-custom">Inactive</span>
                                      <?php
                                    }
                                  ?>
                            </td>
                            <td>
                                <a href="webinar_form.php?id=<?php echo trim(base64_encode($val['id_webinar']), "=.") ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                            </td>
                          </tr> 
                        <?php
                      }
                    }
                    else
                    {
                        echo "<tr colspan='4' class='text-center'> no data</tr>";
                    }
                   ?>
                   
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
