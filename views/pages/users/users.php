<div class="content-wrapper"> <!-- Content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Users Control </h1><h3 class="title-rasppage">In this section, you can add or delete users, as well as edit their privileges and information. </h3>
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
              <button type="button" class="btn btn-block btn-primary btn-sm btn-add-element" data-toggle="modal" data-target="#modal-add-user">Add User</button>
            </div>
              <div class="card-body">
                <table id="example" class="display nowrap tablas" style="width:100%;">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Perfil</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Last Login</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
  $item = null;
  $valor = null;
  $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
    foreach ($usuarios as $key => $value){
      if($value["display"]==1){ 
      echo '<tr>
        <td>'.($key+1).'</td>
        <td>'.$value["nombre"].' '.$value["apellido"].'</td>
        <td>'.$value["usuario"].'</td>
        <td>'.$value["perfil"].'</td>';
          if($value["foto"] != ""){
            echo '<td><img src="'.$value["foto"].'" class="img-thumbnail rounded-circle" style="height:60px;padding:0;"></td>';    
              }else{
              echo '<td><img src="vistas/images/icons/user.png" class="img-thumbnail" style="height:60px;padding:0;"></td>';  
            }
          if($value["estado"] != 0){
            echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["user_id"].'" estadoUsuario="0">Active</button></td>';
              }else{
               echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["user_id"].'" estadoUsuario="1">Inactive</button></td>';
            }

      echo '<td>'.$value["email"].'</td>
            <td>'.$value["ultimo_login"].'</td>
            <td>
             <div>
              <button class="btn btnEditarUsuario" idUsuario="'.$value["user_id"].'" data-toggle="modal" data-target="#modal-edit-user"><img src="views/assets/img/edit_icon.png" width="27" height="27" /></button>
              <button class="btn btnEliminarUsuario" idUsuario="'.$value["user_id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'" data-toggle="modal" data-target="#modal-delete-user"><img src="views/assets/img/trash_icon.png" width="27" height="27" /></button>
             </div>
            </td>
          </tr>';
    }
  }?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Perfil</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Last Login</th>
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



<!-- Add User -->
<div class="modal fade" id="modal-add-user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-user" style="color: #000000;"></i></span>
            <input type="text" class="form-control" id="idNewFirstName" name="nameNewFirstName" placeholder="First name" pattern="[a-zA-Z0-9_ ]{2,20}" required/>
            <input type="text" class="form-control" id="idNewLastName" name="nameNewLastName" placeholder="Last name" required/>
          </div>

          <div class="input-group mb-3">
            <input 
            type="text" 
            class="form-control input-lg" 
            id="idNewUser" 
            name="nameNewUser" 
            placeholder="Username, (IDSID or WWID)" 
            onchange="validateUserAvailable(event, 'text')"
            required 
            autocomplete="off"/>
            <span class="input-group-text">@</span>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>  
          </div>

          <div class="input-group mb-3">
            <input 
            type="email" 
            id="idNewEmail" 
            name="nameNewEmail" 
            class="form-control" 
            placeholder="Email" 
            onchange="validateEmailAvailable(event, 'email')"
            required
            autocomplete="off"/>
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope" style="color: #000000;"></i></span>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>         
          </div>

          <div class="input-group mb-3">            
            <span class="input-group-text"><i class="fas fa-solid fa-lock" style="color: #000000;"></i></span>
            <input type="password" class="form-control input-lg" id="idNewPass" name="nameNewPass" placeholder="Password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            required autocomplete="off" />
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-users" style="color: #000000;"></i></span>
              <?php
                $profile = file_get_contents("views/pages/users/profiles.json");
                $profile = json_decode($profile, true);
              ?>
              <select class="form-control select2" id="idNewProfile" name="nameNewProfile" required>
                <option value>Select Profile</option>
                <?php foreach ($profile as $key => $value): ?>
                  <option value="<?php echo $value["profile"]?>"><?php echo $value["profile"] ?></option>
                <?php endforeach ?>  
              </select>
          </div>

          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input classNewUserImg" accept="image/*" id="idNewUserImg" name="nameNewUserImg">
              <label class="custom-file-label" for="idNewUserImg">Choose file</label>
            </div>
          </div>  
          
          <label for="idNewUserImg" class="d-flex justify-content-center"> 
            <figure class="text-center imgNewUser" style="margin-top:1%;">  
              <img src="views/assets/img/user.png" class="img-fliud rounded-circle previsualizar" style="width:120px;" />
              <br>
              <label>The image must be smaller than 2MB!</label>       
            </figure>
          </label>
                  
        <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
        </div>

        </div> <!-- /.form-group -->
       </div><!-- /.modal-body --> 
              <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrCrearUsuario();
              ?>

      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<!-- Edit User -->
<div class="modal fade" id="modal-edit-user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="idEditFirstName" 
            name="nameEditFirstName" pattern="[a-zA-Z0-9_ ]{2,20}" 
            title="The firstname must not contain special characters, only hyphens and spaces are allowed.";
            value="" required/>
            <input type="text" class="form-control" id="idEditLastName" name="nameEditLastName" pattern="[a-zA-Z0-9_ ]{2,20}" value="" required/>
            <span class="input-group-text"><i class="fas fa-user" style="color: #000000;"></i></span>
          </div>

          <div class="input-group mb-3">
            <input 
            type="text" 
            class="form-control input-lg" 
            id="idEditUser" 
            name="nameEditUser" 
            value="" 
            onchange="validateUserAvailable(event, 'text')"
            readonly
            >
            <span class="input-group-text">@</span>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>  
          </div>

          <div class="input-group mb-3">
            <input 
            type="email" 
            id="idEditEmail" 
            name="nameEditEmail" 
            class="form-control" 
            value="" 
            onchange="validateAvailable(event, 'email')"
            required>
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope" style="color: #000000;"></i></span>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>         
          </div>

          <div class="input-group mb-3">            
            <input type="password" class="form-control input-lg" id="idEditPass" name="nameEditPass" placeholder="Enter new password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            />
            <input type="hidden" id="idPassActual" name="namePassActual">
            <span class="input-group-text"><i class="fas fa-solid fa-lock" style="color: #000000;"></i></span>
          </div>

          <div class="input-group mb-3">
            <select class="form-control" name="nameEditProfile">
              <option selected id="idEditProfile"></option>
              <option value="Administrator">Administrator</option>
              <option value="Technician">Technician</option>
              <option value="Customer">Customer</option>
            </select> 
            <span class="input-group-text"><i class="fas fa-users" style="color: #000000;"></i></span>            
          </div>
        

          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input classNewUserImg" accept="image/*" id="idEditUserImg" name="nameEditUserImg">
              <label class="custom-file-label" for="idEditUserImg">Choose file</label>
              <input type="hidden" id="idFotoActual" name="nameFotoActual">
            </div>
          </div>  
          
          <label for="idEditUserImg" class="d-flex justify-content-center"> 
            <figure class="text-center imgNewUser" style="margin-top:1%;">  
              <img src="views/assets/img/user.png" class="img-fliud rounded-circle previsualizar" style="width:120px;" />
              <br>
              <label>The image must be smaller than 2MB!</label>       
            </figure>
          </label>
                  
        <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
        </div>

        </div> <!-- /.form-group -->
       </div><!-- /.modal-body --> 
            <?php
                $EditUser = new ControladorUsuarios();
                $EditUser -> ctrEditUser();
              ?>
            
      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!--<script src="views/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->
<script src="views/assets/custom/js/forms.js"></script>
<script src="views/assets/custom/js/users.js"></script>


