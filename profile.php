<?php include "header.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
            </div>
            <div class="card-body">
              <div class="col-sm-7">
                <form class="form-horizontal pad15L pad15R bordered-row">
                        <div class="form-group remove-border">
                            <label class="col-sm-3 control-label">First Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="First name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="Last name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" placeholder="Email address...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Website:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="Website...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">About me:</label>
                            <div class="col-sm-6">
                                <textarea name="" rows="3" class="form-control textarea-autosize" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 78px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Profile Picture:</label>
                            <div class="col-sm-6">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail form-control " data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                    <div>
                                    <span class="btn btn-default btn-file">
                                        <!-- <span class="fileinput-new">Select image</span> 
                                        <span class="fileinput-exists">Change</span>-->
                                        <input type="file" name="...">
                                    </span>
                                        
                                    </div>
                                    <div>
                                        <button class="btn btn-primary">Save</button>
                                        <button class="btn btn-link font-gray-dark">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "footer.php"; ?>