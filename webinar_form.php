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
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Webinar Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-name" class="col-form-label">Webinar Name</label>
                          <input type="text" class="form-control" id="webinar-name" name="webinar_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-startdate" class="col-form-label">Start Date</label>
                          <input type="text" class="form-control" id="webinar-startdate" name="start_date">
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-enddate" class="col-form-label">End Date</label>
                          <input type="text" class="form-control" id="webinar-enddate" name="end_date">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-mobileurl" class="col-form-label">Mobile Image Url</label>
                          <input type="text" class="form-control" id="webinar-mobileurl" name="webinar_mobile_img_url">
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-desktopurl" class="col-form-label">Desktop Image Url</label>
                          <input type="text" class="form-control" id="webinar-desktopurl" name="webinar_dekstop_img_url">
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-webinarstatus" class="col-form-label">Status</label>
                          <select class="form-control" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                          </select>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
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

<script type="text/javascript">
	$(function(){
		
		$('body').find('#webinar-startdate, #webinar-enddate').inputmask('datetime', {
			alias 		 :'datetime',
			inputFormat  : "yyyy-mm-dd HH:MM:ss", 
			outputFormat : "yyyy-mm-dd HH:MM:ss",
			leapday: "29.02."
		})

	});
	</script>
</body>
</html>
