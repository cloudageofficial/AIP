<?php include "header.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Settings</h6>
            </div>
            <div class="card-body">
                <!-- accordion -->
                  <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">Backup<i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        <!-- content -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="uploadedfile" ><br><br>
          <input type="submit" class="btn btn-primary" value="Upload Backup">
        </form><br>
        <div class="progress">
          <div class="bar"></div >
          <div class="percent">0%</div >
        </div>
        <div id="status"></div>
        <!-- end content -->
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">Restore<i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
      <div class="card-body">
        <!-- content -->
        <form action="restore.php" method="post" enctype="multipart/form-data">
          <input type="file" name="uploadedfile" ><br><br>
          <input type="submit" class="btn btn-primary" value="Restore">
        </form><br>
        <div class="progress">
          <div class="bar"></div >
          <div class="percent">0%</div >
        </div>
        <div id="rstatus"></div>
        <!-- end content -->
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">Knowledge Base <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
      <div class="card-body">
       <!-- content -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="test" name="knowledge-url" class="form-control name_list"><br><br>
          <input type="submit" class="btn btn-primary" value="Add">
        </form>
        <!-- end content -->
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
                <!-- end accordion -->
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "footer.php"; ?>