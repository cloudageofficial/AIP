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
              <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
            </div>
            <div class="card-body">
              <div class="col-sm-7">
                <form method="POST" action="#" onsubmit="return checkForm(this);" id="reset-password">
                    <div class="username">
                      <label name="oldpassword">Old Password</label><input title="Enter your username" type="text" required pattern="\w+" name="username" class="form-control name_list">
                    </div>
                    <div class="password">
                        <label name="new-password">New Password</label>
                        <input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="
                        this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
                        if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);
                      " class="form-control name_list">
                    </div>
                    <div class="confirm-password">
                      <label name="confirm-password">Confirm Password</label>
                      <input title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="
                        this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
                      " class="form-control name_list"></p>
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
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