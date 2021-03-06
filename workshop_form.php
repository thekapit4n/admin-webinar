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
                  <h3 class="card-title">Workshop Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="webinar-name" class="col-form-label">Webinar Name</label>
                          <select class="form-control" name="id_webinar">
                            <option value="">Please select webinar</option>
                            <option value="1">Motherhood Super Kids</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-name" class="col-form-label">Workshop Name</label>
                          <input type="text" class="form-control" id="workshop-name" name="workshop_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-faciliatatorname" class="col-form-label">Tutor name</label>
                          <input type="text" class="form-control" id="workshop-faciliatatorname" name="workshop_facilitator">
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-tutorimgurl" class="col-form-label">Tutor Image Url</label>
                          <input type="text" class="form-control" id="workshop-tutorimgurl" name="workshop_facilitator_img_url">
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-startdate" class="col-form-label">Start Date</label>
                          <input type="text" class="form-control" id="workshop-startdate" name="workshop_start_date">
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-enddate" class="col-form-label">End Date</label>
                          <input type="text" class="form-control" id="workshop-enddate" name="workshop_end_date">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-mobileurl" class="col-form-label">Mobile Image Url</label>
                          <input type="text" class="form-control" id="workshop-mobileurl" name="workshop_mobile_img_url">
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-desktopurl" class="col-form-label">Desktop Image Url</label>
                          <input type="text" class="form-control" id="workshop-desktopurl" name="workshop_desktop_img_url">
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-url" class="col-form-label">Webinar Url</label>
                          <input type="text" class="form-control" id="workshop-url" name="workshop_url_class">
                        </div>
                      </div> 
                    </div> 
                    <div class="row">
                      <div class="col-md-12 px-2">
                        <div class="form-group">
                          <label for="workshop-shortdesc" class="col-form-label">Short Description</label>
                          <textarea class="form-control" rows="3" id="webinar-startdate" name="workshop_short_desc"></textarea>
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-md-12 px-2">
                        <div class="form-group">
                          <label for="workshop-fulldesc" class="col-form-label">Full Description</label>
                          <textarea class="form-control" rows="3" id="webinar-fulldesc" name="workshop_full_desc"></textarea>
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-status" class="col-form-label">Status</label>
                          <select class="form-control" name="workshop_status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                          </select>
                        </div>
                      </div> 
                      <div class="col-md-6 px-2">
                        <div class="form-group">
                          <label for="workshop-nature" class="col-form-label">Type</label>
                          <select class="form-control" name="workshop_nature">
                            <option value="premium">Premium</option>
                            <option value="free">Free</option>
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

  function initMCEall()
  {
    tinymce.init({ selector:'textarea' 
		  , plugins: "code,lists,table,image" 
		  , toolbar: "code numlist bullist table image"
		  , valid_elements:"*[*]"
		  ,valid_children : "+body[style]"
		  });
  }

	$(function(){
		
		$('body').find('#workshop-startdate, #workshop-enddate').inputmask('datetime', {
			alias 		 :'datetime',
			inputFormat  : "yyyy-mm-dd HH:MM:ss", 
			outputFormat : "yyyy-mm-dd HH:MM:ss",
			leapday: "29.02."
		})

    initMCEall()
	});
	</script>
</body>
</html>
