<div class="content-wrapper">
<!-- Main content -->
  <section class="content">  <!-- section content -->
    <div class="container-fluid"> <!-- contentainer-fluid -->
      <div class="row"> <!-- row -->
        <div class="col-12"> <!-- col12 -->



<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>RASP</b>Inventory</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

    <form method="post" class="needs-validation" novalidate>
       
    <div class="input-group mb-3">
      <input 
        type="email" 
        class="form-control" 
        name="ingEmail" 
        placeholder="email@email.com" 
        onchange="validateEmail(event, 'email')"
        required>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>

      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="input-group mb-3">
      <input 
        type="password" 
        class="form-control" 
        name="ingPassword"
        id="password" 
        placeholder="Password"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
        onchange="validatePass(event, 'password')"
        required>
      <div class="input-group-append">
        <div class="input-group-text bg-eyelogin">
          <span class="fas fa-eye eyelogin" id="togglePassword"></span>
        </div>
      </div>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>

      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="row" style="justify-content: center;">
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      </div>
    </div>
        <?php
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        ?>
    </form>



      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</div>
</div>
</div>
</section>
</div>
<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/custom/js/forms.js"></script>