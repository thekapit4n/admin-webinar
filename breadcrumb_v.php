<?php 
      if(isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] != '') 
      {
        ?>  
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo ucwords(strtolower(str_replace("_", " ", $arr_pathinfo['filename']))) ?></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>

        <?php
      }
    ?>