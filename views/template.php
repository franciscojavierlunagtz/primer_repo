

<?php
session_start();
/*=============================================
Capturar las rutas de la URL
=============================================*/
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
/*=============================================
Limpiar la Url de variables GET
=============================================*/
foreach ($routesArray as $key => $value) {
  $value = explode("?", $value)[0];
  $routesArray[$key] = $value;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RASP Inventory System</title>
  <link rel="icon" href="views/assets/img/logo_short.png">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
<link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars 
<link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->

<!-- Select2 -->
<link rel="stylesheet" href="views/assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="views/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<!-- sweetalert -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="views/assets/plugins/toastr/toastr.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/fixedHeader.dataTables.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="views/assets/plugins/lte/css/adminlte.min.css">
<link rel="stylesheet" href="views/assets/plugins/css/style.css">
</head>
<body class="hold-transition layout-top-nav">

<?php
if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "done"){
  echo '<div class="wrapper">';
include "views/modules/navbar.php"; 
    if(!empty($routesArray[2])){
      if($routesArray[2] == "home" ||
         $routesArray[2] == "systems" ||
         $routesArray[2] == "cpus" ||
         $routesArray[2] == "syshwchange" ||         
         $routesArray[2] == "dimms" ||
         $routesArray[2] == "inventory" ||
         $routesArray[2] == "hwchange" ||
         $routesArray[2] == "users" ||
         $routesArray[2] == "exit"){
            include "views/pages/".$routesArray[2]."/".$routesArray[2].".php";
         }else{
            include "views/pages/404/404.php";
          }
    }else{
           include "views/pages/home/home.php";
    } 
    
    include "views/modules/footer.php";
    echo '</div>';

  }else{
    include "views/pages/login/login.php";
  }

    ?>






<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars 
<script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- Select2 -->
<script src="views/assets/plugins/select2/js/select2.full.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/assets/plugins/datatables-responsive/js/dataTables.fixedHeader.min.js"></script>
<script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="views/assets/plugins/jszip/jszip.min.js"></script>
<script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/plugins/lte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/assets/plugins/lte/js/demo.js"></script>
<script src="views/assets/plugins/jquery/tablas.js"></script>
<script src="views/assets/plugins/jquery/select2.js"></script>

</body>
</html>
