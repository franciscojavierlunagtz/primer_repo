<div class="content-wrapper"> <!-- Content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Hardware Change </h1><h3 class="title-rasppage">In this section you can register the hardware changes you make to the systems. </h3>
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
<p>Search and select the system where you will make hardware changes.</p>

        </div>
          <div class="card-body">
          <table id="hwchangetable" class="display nowrap tablas" style="width:100%;">
            <thead>
              <tr>
                <th>Num</th>
                <th>Epic Name</th>
                <th>Summary</th>
                <th>System ID</th>
                <th>Platform</th>
                <th>Board Name</th>
                <th>Processor</th>
                <th>Change Hardware</th>
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
            <td class="btnEditarSysHWC" idSystemHWC="'.$value["systemID"].'"><a>'.$value["systemID"].'</a></td>
            <td>'.$value["platform"].'</td>
            <td>'.$value["boardname"].'</td>
            <td>'.$value["processor"].'</td>
            <td>
             <div class="btn-group">
              <button class="btn btnEditarSysHWC" idSystemHWC="'.$value["systemID"].'"><img src="views/assets/img/change.png" width="27" height="27" /></button>
             </div>
            </td>
          </tr>';
              }
            }
            ?>

                  </tbody>
          </table>
              </div> <!-- card-body -->
            </div> <!-- card -->
          </div>
        </div>
      </div> <!-- contentainer-fluid -->
    </section> <!-- section content -->    
</div> <!-- Content-wrapper -->



<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/custom/js/hardwareChange.js"></script>

<!--<script src="views/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->


