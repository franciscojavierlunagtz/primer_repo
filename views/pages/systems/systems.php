<div class="content-wrapper"> <!-- Content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Systems </h1><h3 class="title-rasppage">In this section, you can add or delete systems, as well as edit their information. </h3>
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
                <button type="button" class="btn btn-block btn-primary btn-sm btn-add-element" data-toggle="modal" data-target="#modal-add-system">Add System</button>
            </div>
              <div class="card-body">
                <table id="example" class="display nowrap tablas" style="width:100%;">
                    <thead>
            <tr>
                <th>Num</th>
                <th>Epic Name</th>
                <th>Summary</th>
                <th>System ID</th>
                <th>State</th>
                <th>Location</th>
                <th>Platform</th>
                <th>Board Name</th>
                <th>Processor</th>
                <th>Team</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>

            <?php
            $item = null;
            $valor = null;

            $sistemas = ControladorSistemas::ctrMostrarSistema($item, $valor);
            //var_dump($productos);

            foreach ($sistemas as $key => $value){
              if($value["display"]==1){ 
                echo '<tr>
            <td>'.($key+1).'</td>
            <td>'.$value["epicname"].'</td>
            <td>'.$value["summary"].'</td>
            <td>'.$value["systemID"].'</td>
            <td>'.$value["state"].'</td>
            <td>'.$value["location"].'</td>
            <td>'.$value["platform"].'</td>
            <td>'.$value["boardname"].'</td>
            <td>'.$value["processor"].'</td>
            <td><textarea style="border:none;" rows="1" cols="12">'.$value["team"].'</textarea></td>
            <td>
             <div class="btn-group">
              <button class="btn btnEditarSistema" idsistema="'.$value["sys_id"].'" data-toggle="modal" data-target="#modal-edit-system"><img src="views/assets/img/edit_icon.png" width="27" height="27" /></button>
              <button class="btn btnEliminarSistema" idsistema="'.$value["sys_id"].'"><img src="views/assets/img/trash_icon.png" width="27" height="27" /></button>
             </div>
            </td>
          </tr>';
              }
            }
            ?>

                  </tbody>
        <tfoot>
            <tr>
                <th>Num</th>
                <th>Epic Name</th>
                <th>Summary</th>
                <th>System ID</th>
                <th>State</th>
                <th>Location</th>
                <th>Platform</th>
                <th>Board Name</th>
                <th>Processor</th>
                <th>Team</th>
                <th>Actions</th>
            </tr>
        </tfoot>

    </table>

              </div> <!-- card-body -->
            </div> <!-- card -->
          </div> <!-- col12 -->
        </div> <!-- row -->
      </div> <!-- contentainer-fluid -->
    </section> <!-- section content -->    
</div> <!-- Content-wrapper -->





<!-- Add System -->
<div class="modal fade" id="modal-add-system">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Add System</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group">

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Epic Name</span>
            <input type="text" 
            class="form-control" 
            placeholder="Epic Name" 
            pattern="[a-zA-Z0-9_ ]{2,20}" 
            id="idNewSysEpic"
            name="nameNewSysEpic"
            autocomplete="off"
            onchange="validateEpicAvailable(event, 'text')"
            required/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Summary</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysSummary" name="selNameNewSysSummary" required>
                <option value>Select Summary</option>
                <?php $item = "summary"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['summary'];?>"><?php echo $value['summary']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
            </select>
            <input type="text" 
              class="form-control" 
              placeholder="Input New Summary" 
              pattern="[a-zA-Z0-9/-/ ]{2,20}" 
              id="inpIdNewSysSummary"
              name="inpNameNewSysSummary"
              autocomplete="off"
              style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">System ID</span>
            <input type="text" 
            class="form-control" 
            placeholder="SystemID" 
            pattern="[a-zA-Z0-9_ ]{2,20}" 
            id="idNewSysID"
            name="nameNewSysID"
            autocomplete="off"
            required/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">State</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysState" name="selNameNewSysState">
                <option value>Select State</option>
                <?php $item = "state"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['state'];?>"><?php echo $value['state']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New State" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysState"
            name="inpNameNewSysState"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Location</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysLoc" name="selNameNewSysLoc">
                <option value>Select Location</option>
                <?php $item = "location"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['location'];?>"><?php echo $value['location']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Location" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysLoc"
            name="inpNameNewSysLoc"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>
            

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Platform</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysPlat" name="selNameNewSysPlat">
                <option value>Select Platform</option>      
                <?php $item = "platform"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['platform'];?>"><?php echo $value['platform']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Platform" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysPlat"
            name="inpNameNewSysPlat"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Board Name</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysBN" name="selNameNewSysBN">
                <option value>Select Board Name</option>
                <?php $item = "boardname"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['boardname'];?>"><?php echo $value['boardname']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Board" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysBN"
            name="inpNameNewSysBN"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Processor</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysCPU" name="selNameNewSysCPU">
                <option value>Select Processor</option>
                <?php $item = "processor"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['processor'];?>"><?php echo $value['processor']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Processor" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysCPU"
            name="inpNameNewSysCPU"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Team</span>
          <select class="form-control" style="width:200px;" id="selIdNewSysTeam" name="selNameNewSysTeam">
                <option value>Select Team</option>
                <?php $item = "team"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['team'];?>"><?php echo $value['team']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Team" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdNewSysTeam"
            name="inpNameNewSysTeam"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
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
                $crearUsuario = new ControladorSistemas();
                $crearUsuario -> ctrCrearSistema();
              ?>

      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<!-- Edit System -->
<div class="modal fade" id="modal-edit-system">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Edit System</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group">

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Epic Name</span>
            <input type="text" 
            class="form-control" 
            placeholder=""
            value="" 
            pattern="[a-zA-Z0-9/_/-/ ]{2,20}" 
            id="idEditSysEpic"
            name="nameEditSysEpic"
            autocomplete="off"
            onchange="validateEpicAvailable(event, 'text')"
            required/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Summary</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysSummary" name="selNameEditSysSummary" required>
                <option selected id="selIdEditSysSummary"></option>
                <?php $item = "summary"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['summary'];?>"><?php echo $value['summary']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
            </select>
            <input type="text" 
              class="form-control" 
              placeholder="Input New Summary" 
              pattern="[a-zA-Z0-9/-/ ]{2,20}" 
              id="inpIdEditSysSummary"
              name="inpNameEditSysSummary"
              autocomplete="off"
              style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">System ID</span>
            <input type="text" 
            class="form-control" 
            placeholder=""
            value="" 
            pattern="[0-9]{2,8}" 
            id="idEditSysID"
            name="nameEditSysID"
            autocomplete="off"
            required/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">State</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysState" name="selNameEditSysState">
                <option selected id="selIdEditSysState"></option>
                <?php $item = "state"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['state'];?>"><?php echo $value['state']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New State" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysState"
            name="inpNameEditSysState"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Location</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysLoc" name="selNameEditSysLoc">
                <option selected id="selIdEditSysLoc"></option>
                <?php $item = "location"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['location'];?>"><?php echo $value['location']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Location" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysLoc"
            name="inpNameEditSysLoc"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>
            

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Platform</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysPlat" name="selNameEditSysPlat">
                <option selected id="selIdEditSysPlat"></option>      
                <?php $item = "platform"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['platform'];?>"><?php echo $value['platform']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Platform" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysPlat"
            name="inpNameEditSysPlat"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Board Name</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysBN" name="selNameEditSysBN">
                <option selected id="selIdEditSysBN"></option>
                <?php $item = "boardname"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['boardname'];?>"><?php echo $value['boardname']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Board" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysBN"
            name="inpNameEditSysBN"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Processor</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysCPU" name="selNameEditSysCPU">
                <option selected id="selIdEditSysCPU"></option>
                <?php $item = "processor"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['processor'];?>"><?php echo $value['processor']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Processor" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysCPU"
            name="inpNameEditSysCPU"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> 
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text inputsNewSys">Team</span>
          <select class="form-control" style="width:200px;" id="selIdEdSysTeam" name="selNameEditSysTeam">
                <option selected id="selIdEditSysTeam"></option>
                <?php $item = "team"; $valor = null; $system = ControladorSistemas::ctrMostrarSistema($item, $valor); foreach ($system as $key => $value):?>
                    <option value="<?php echo $value['team'];?>"><?php echo $value['team']?></option>
                <?php endforeach ?>
                <option value="">-make your own choice-</option>
          </select>
          <input type="text" 
            class="form-control" 
            placeholder="Input New Team" 
            pattern="[a-zA-Z0-9/-/ ]{2,20}" 
            id="inpIdEditSysTeam"
            name="inpNameEditSysTeam"
            autocomplete="off"
            style="width:150px; margin-left:auto; display:none;"/>
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
                $crearUsuario = new ControladorSistemas();
                $crearUsuario -> ctrEditarSistema();
              ?>

      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/custom/js/systems.js"></script>
<!--<script src="views/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->
