<link rel="stylesheet" href="views/assets/plugins/css/styleTablas.css">
<div class="content-wrapper"> <!-- Content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> CPUs Inventory </h1><h3 class="title-rasppage">In this section, you can add or delete CPUs, as well as edit their information. </h3>
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
                <button type="button" class="btn btn-block btn-primary btn-sm btn-add-element" data-toggle="modal" data-target="#modal-add-cpu">Add CPU</button>
            </div>
              <div class="card-body">
                
              <table name="tabla_cpus" id="tabla_cpus" class="display nowrap tablas2" width="100%"> 
                 <thead>
                    <tr>
                        <th>Product name</th>
                        <th>QDF</th>
                        <th>Step</th>
                        <th>Mcode</th>
                        <th>Serial</th>
                        <th>Ubication</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>WAIC</th>
                        <th>Reserved</th>
                        <th>WIP</th>
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

        <div class="input-group mb-3" style="min-inline-size: max-content;">
            <span class="input-group-text inputsNewSys" style="width:110px;">Product</span>            
            <select class="form-control" style="width:200px;" id="idSelNewProduct" name="nameSelNewProduct" required>
                <option value="">Select Product Name</option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="product_name";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['product_name'];?>"><?php echo $value['product_name'];?></option>
                <?php endforeach ?>
            </select>
            <input class="form-control" type="text" id="idInputNewProduct" name="nameInputNewProduct" placeholder="input new product name" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">QDF</span>
            <select class="form-control" style="width:200px;" id="idSelNewQDF" name="nameSelNewQDF" required>
                <option value="">Select QDF</option>
                <option value="" class="highlightSel">-make your own choice-</option>
            </select>
            <input type="text" class="form-control" id="idInputNewQDF" name="nameInputNewQDF" placeholder="input new QDF" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                    
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Stepping</span>
            <select class="form-control" style="width:200px;" id="idSelNewStep" name="nameSelNewStep" required>
                <option value="">Select Stepping</option>
                <option value="" class="highlightSel">-make your own choice-</option>
            </select>
            <input class="form-control" type="text" id="idInputNewStep" name="nameInputNewStep" placeholder="input new Stepping" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                   
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">MCODE</span>
            <input type="text" class="form-control" id="idInputNewMcode" name="nameInputNewMcode" placeholder="Enter Mcode" required />
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Serial</span>
            <input type="text" class="form-control" id="idInputNewSerial" name="nameInputNewSerial" placeholder="Enter Serial Number" required />
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Location</span>
            <select class="form-control" style="width:200px;" id="idSelNewLoc" name="nameSelNewLoc" required>
            <option value="">Select Location</option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="ubication";$item2=null;$valor=null;$hw = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                    <option value="<?php echo $value['ubication'];?>"><?php echo $value['ubication'];?></option>
                <?php endforeach ?>
            </select>
            <input class="form-control" type="text" id="idInputNewLoc" name="nameInputNewLoc" placeholder="input new Location" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Status</span>
            <select class="form-control" style="width:200px;" id="idSelNewStat" name="nameSelNewStat" required>
                <option value="">Select Status</option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="status";$item2=null;$valor=null;$hw = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                    <option value="<?php echo $value['status'];?>"><?php echo $value['status'];?></option>
                <?php endforeach ?>
            </select>
            <input class="form-control" type="text" id="idInputNewStat" name="nameInputNewStat" placeholder="input new Status" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                  
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Team</span>
            <select class="form-control" style="width:200px;" id="idSelNewTeam" name="nameSelNewTeam" required>
                <option value="">Select Team</option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="team";$item2=null;$valor=null;$hw = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                    <option value="<?php echo $value['team'];?>"><?php echo $value['team'];?></option>
                <?php endforeach ?>
            </select>
            <input class="form-control" type="text" id="idInputNewTeam" name="nameInputNewTeam" placeholder="input new Team" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                  
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">WAIC</span>
            <input class="form-control" type="text" class="form-control" id="idInputNewWaic" name="nameInputNewWaic" placeholder="Enter WAIC"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Reserved</span>
            <select class="form-control" style="width:200px;" id="idSelNewReserv" name="nameSelNewReserv" required>
                <option value="">Select Condition</option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="reserved";$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                    <option value="<?php echo $value['reserved'];?>"><?php echo $value['reserved'];?></option>
                <?php endforeach ?>
            </select>
            <input class="form-control" type="text" id="idInputNewReserv" name="nameInputNewReserv" placeholder="input new Condition" style="width:150px; margin-left:auto; display:none;"/> 
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                  
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">WIP</span>
            <input class="form-control" type="text" class="form-control" id="idInputNewWIP" name="nameInputNewWIP" placeholder="Enter WIP"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text inputsNewSys" style="width:110px;">Comments</span>
            <input class="form-control" type="text" class="form-control" id="idInputNewComment" name="nameInputNewComment" placeholder="Enter Comments"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>                                          
             
        <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
        </div>
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

        <div class="input-group mb-3" style="min-inline-size: max-content;">
            <span class="input-group-text" style="width:110px;">Product</span>            
            <select class="form-control" style="width:200px;" id="idSelEditProduct" name="nameSelEditProduct" onChange="updateHiddenLoc(this.value)" required>
                <option id="editProductName" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="product_name";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['product_name'];?>"><?php echo $value['product_name'];?></option>
                <?php endforeach ?>
            </select>
            <input type="text" id="idInputEditProduct" name="nameInputEditProduct" placeholder="input new product name" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:110px;">QDF</span>
            <select class="form-control" style="width:200px;" id="idSelEditQDF" name="nameSelEditQDF" required>
                <option id="editQDF" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="qdf";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['qdf'];?>"><?php echo $value['qdf'];?></option>
                <?php endforeach ?>
            </select>
            <input type="text" id="idInputEditQDF" name="nameInputEditQDF" placeholder="input new QDF" style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>                
        </div>


        <div class="input-group mb-3">
            <span class="input-group-text" style="width:110px;">Stepping</span>
            <select class="form-control" style="width:200px;" id="idSelEditStep" name="nameSelEditStep" required>
                <option id="editStep" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                 <?php $tabla="cpus";$item="step";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['step'];?>"><?php echo $value['step'];?></option>
                <?php endforeach ?>
            </select>
                    <input type="text" id="idInputEditStep" name="nameInputEditStep" placeholder="input new Stepping" style="width:150px; margin-left:auto; display:none;"/>                   
        </div>

        <div class="input-group mb-3">
               <span class="input-group-text" style="width:110px;">MCODE</span>
               <input type="text" class="form-control" id="idInputEditMcode" name="nameInputEditMcode" placeholder="Enter Mcode" readonly />
        </div>

        <div class="input-group mb-3">
               <span class="input-group-text" style="width:110px;">Serial</span>
               <input type="text" class="form-control" id="idInputEditSerial" name="nameInputEditSerial" placeholder="Enter Serial Number" readonly />
        </div>

        <div class="input-group mb-3">
            <input type="text" id="idInputEProd" value="" hidden/>
            <span class="input-group-text" style="width:110px;">Location</span>
            <select class="form-control" style="width:200px;" id="idSelEditLoc" name="nameSelEditLoc" required>
                <option id="editUbicacion" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                 <?php $tabla="cpus";$item="ubication";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['ubication'];?>"><?php echo $value['ubication'];?></option>
                <?php endforeach ?>
            </select>
                    <input type="text" id="idInputEditLoc" name="nameInputEditLoc" placeholder="input new Location" style="width:150px; margin-left:auto; display:none;"/>                   
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:110px;">Status</span>
            <select class="form-control" style="width:200px;" id="idSelEditStat" name="nameSelEditStat" required>
                <option id="editStatus" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                <?php $tabla="cpus";$item="status";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['status'];?>"><?php echo $value['status'];?></option>
                <?php endforeach ?>
            </select>
                    <input type="text" id="idInputEditStat" name="nameInputEditStat" placeholder="input new Status" style="width:150px; margin-left:auto; display:none;"/>                   
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:110px;">Team</span>
            <select class="form-control" style="width:200px;" id="idSelEditTeam" name="nameSelEditTeam" required>
                <option id="editTeam" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
                 <?php $tabla="cpus";$item="team";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['team'];?>"><?php echo $value['team'];?></option>
                <?php endforeach ?>
            </select>
                    <input type="text" id="idInputEditTeam" name="nameInputEditTeam" placeholder="input new Team" style="width:150px; margin-left:auto; display:none;"/>                   
        </div>

        <div class="input-group mb-3">
               <span class="input-group-text" style="width:110px;">WAIC</span>
               <input type="text" class="form-control" id="idInputEditWaic" name="nameInputEditWaic" placeholder="Enter WAIC"/>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:110px;">Reserved</span>
            <select class="form-control" style="width:200px;" id="idSelEditReserv" name="nameSelEditReserv" required>
                <option id="editReservado" value=""></option>
                <option value="" class="highlightSel">-make your own choice-</option>
               <?php $tabla="cpus";$item="reserved";$item2=null;$valor=null;$hw=ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor); foreach ($hw as $key => $value):?>
                 <option value="<?php echo $value['reserved'];?>"><?php echo $value['reserved'];?></option>
                <?php endforeach ?>
            </select>
                    <input type="text" id="idInputEditReserv" name="nameInputEditReserv" placeholder="input new Condition" style="width:150px; margin-left:auto; display:none;"/>                   
        </div>

        <div class="input-group mb-3">
               <span class="input-group-text" style="width:110px;">WIP</span>
               <input type="text" class="form-control" id="idInputEditWIP" name="nameInputEditWIP" placeholder="Enter WIP"/>
        </div>

        <div class="input-group mb-3">
               <span class="input-group-text" style="width:110px;">Comments</span>
               <input type="text" class="form-control" id="idInputEditComment" name="nameInputEditComment" placeholder="Enter Comments"/>
        </div>
                                            
        <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
        </div>
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
<script src="views/assets/custom/js/cpus.js"></script>
<!--<script src="views/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->

