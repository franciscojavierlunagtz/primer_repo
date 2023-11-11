<link rel="stylesheet" href="views/assets/plugins/css/styleTablas.css">
<div class="content-wrapper"> <!-- Content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> DIMMs Inventory </h1><h3 class="title-rasppage">In this section, you can add or delete DIMMs, as well as edit their information. </h3>
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <section class="content">  <!-- section content -->
    <div class="container-fluid"> <!-- contentainer-fluid -->
      <div class="row"> <!-- row -->
        <div class="col-12"> <!-- col12 -->
          <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-block btn-primary btn-sm btn-add-element" data-toggle="modal" data-target="#modal-add-cpu">Add DIMM</button>
            </div>
              <div class="card-body">
                
              <table name="tabla_dimms" id="tabla_dimms" class="display nowrap tablas2" width="100%"> 
              <thead>
               <tr>                    
                <th>Team</th>
                <th>raw_card</th>
                <th>GDC</th>
                <th>Serial</th>
                <th>Brand</th>
                <th>Item name</th>
                <th>Model</th>
                <th>Date</th>
                <th>Features</th>
                <th>Status</th>
                <th>Ubication</th>
                <th>Reserved</th>
                <th>WAIC</th>
                <th>Comments</th>
                <th>Actions</th>
               </tr>
            </thead>
            </table>

              </div> <!-- card-body -->
            </div> <!-- card -->
          </div> <!-- col12 -->
        </div> <!-- row -->
      </div> <!-- contentainer-fluid -->
    </section> <!-- section content -->    
</div> <!-- Content-wrapper -->





<!-- Add CPU -->
<div class="modal fade" id="modal-add-cpu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Add CPU</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group">

        
        </div> <!-- /.form-group -->
       </div><!-- /.modal-body --> 
             <?php
                $crearcpu = new ControladorHardware();
                $crearcpu -> ctrCrearcpu();
              ?>
      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- Edit CPU -->
<div class="modal fade" id="modal-edit-cpu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Edit CPU</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group">

        </div> <!-- /.form-group -->
       </div><!-- /.modal-body --> 
             <?php
                $crearcpu = new ControladorHardware();
                $crearcpu -> ctrEditcpu();
              ?>
      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/custom/js/tabla.js"></script>
<script src="views/assets/custom/js/dimms.js"></script>
<!--<script src="views/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->

