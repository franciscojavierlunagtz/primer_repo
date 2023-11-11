<?php
$systemTest = isset($_GET['idsysHWC']) ? $_GET['idsysHWC'] : '';
$ticketName = isset($_GET['ticketNum']) ? $_GET['ticketNum'] : '';
$technician = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : 'general';
$technician_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : '123456';


?>

<div class="content-wrapper"> <!-- Content-wrapper -->

<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="titleHWC">System <?php echo $systemTest;?> Hardware Control</h3>
                
            </div>  
        </div>
    </div>  
</div>

<section class="content">
  <div class="container-fluid"> <!-- contentainer-fluid -->
    <div class="row"> <!-- row -->
      <div class="col-12"> <!-- col12 -->
        <div class="card">
          <div class="card-header">
            <small>Hello <?php echo $_SESSION["usuario"] ?>, in this section you can control the hardware installed in <?php echo $systemTest;?> system. </small> 
        
        </div>            
          <div class="card-body grid">
          <div class="bloque grid2">  
          <table class="hwChangeTable">
            <tbody style="text-align: -webkit-center;">
            <tr>
              <td style="text-align: center;">
                <section class="content">
                  <h6>Instrumentation</h6>
                  <br />
                  <button type="button" class="btn btn-primary btn-cabecera" data-toggle="modal" data-target="#mHWCAddDev">
                    Add Instrumentation
                  </button>
                </section>
              </td>
              <td style="width:90%">
                <table id="hwChangeTabInstru"  class="table tableHWC">
                  <thead>
                    <tr>
                        <th>NUM</th>
                        <th>GDC</th>
                        <th>Brand</th>
                        <th>Item name</th>
                        <th>Model</th>
                        <th>Features</th>
                    </tr>
                  </thead>
                    <tbody>
                    
                    </tbody>
                </table>
              </td>
            </tr>

    <tr>
        <td style="text-align: center;">
            <section class="content">
                <h6>PCIe devices</h6>
                <br />
                <button type="button" class="btn btn-primary btn-cabecera" data-toggle="modal" data-target="#mHWCAddPCIe">
                    Add PCIe
                </button>
            </section>
        </td>
        <td style="width:90%">
            <table id="hwChangeTabPCIe"  class="table tableHWC">
                <thead>
                    <tr>
                        <th>NUM</th>
                        <th>GDC</th>
                        <th>Brand</th>
                        <th>Item name</th>
                        <th>Model</th>
                        <th>Features</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </td>
    </tr>

    <tr>
        <td style="text-align: center;">
            <section class="content">
                <h6>CPUs</h6>
                <br />
                <button type="button" class="btn btn-primary btn-cabecera" data-toggle="modal" data-target="#mHWCAddCPU">
                    Add CPU
                </button>
            </section>
        </td>
        <td style="width:90%">
            <table id="hwChangeTabCPU"  class="table tableHWC">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>QDF</th>
                        <th>Stepping</th>
                        <th>Mcode</th>
                        <th>Serial</th>
                        <th>Change / Remove</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php

                    $tabla="cpus";$item="ubication";$valor=$systemTest;
                    $hw=ControladorHardwareToChange::ctrMostrarHWToChange($tabla, $item, $valor);
                    $total = 0;
                    foreach ($hw as $key => $value):
                    ?>
                    <tr>
                        <td>
                            <?php echo ++$total; ?>
                        </td>
                        <td>
                            <?php echo $value['product_name']; ?>
                        </td>
                        <td>
                            <?php echo $value['qdf']; ?>
                        </td>
                        <td>
                            <?php echo $value['step']; ?>
                        </td>
                        <td>
                            <?php echo $value['mcode']; ?>
                        </td>
                        <td>
                            <?php echo $value['serial']; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btnChangeCPU btnTabla" idsyshwchangeCPU="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#mHWCChangeCPU">
                                    <img src="views/assets/img/change.png" width="20" height="20" />
                                </button>
                                <button class="btn btnRemoveCPU btnTabla" idsyshwchangeCPU="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#mHWCRemCPU">
                                     <img src="views/assets/img/minus.png" width="20" height="20" />
                                </button>
                            </div>

                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>

        </td>
    </tr>

    <tr>
        <td style="text-align: center;">
            <section class="content">
                <h6>DIMMs</h6>
                <br />
<?php
                    $tabla="dimms";$item="location";$valor=$systemTest;
                    $hwD=ControladorHardwareToChange::ctrMostrarNumHWToChange($tabla, $item, $valor);

                    if ($hwD < 32) { 
                        
                      echo '<button type="button" class="btn btn-primary checkSlotsDIMMsAvailables btn-cabecera" idsystembyDIMMs="'.$systemTest.'" >ADD DIMM</button>';

                    }else{echo '<button type="button" class="btn btn-primary btn-cabecera disabled">ADD DIMM</button>';}
                    ?>
            </section>
        </td>
        <td style="width:90%">
            <table id="hwChangeTabDIMM" class="table tableHWC tableHWCDIMMs display">
                <thead>
                    <tr>
                        <th>Change / Remove / Check</th>    
                        <th>#</th>
                        <th>GDC</th>
                        <th>Brand</th>
                        <th>Item Name</th>
                        <th>Model</th>                        
                    </tr>
                    
                    </thead>
                <tbody  style="text-align: center;">
                    <?php

                    $tabla="dimms";$item="location";$valor=$systemTest;
                    $hwD=ControladorHardwareToChange::ctrMostrarHWToChange($tabla, $item, $valor);
                    $total = 0;
                    foreach ($hwD as $key => $valueD):
                    ?>
                    <tr>
                        
                        <td>
                            <div class="btn-group">
                                <button class="btn btnTabla" idsyshwchange="<?php echo $valueD['id_dimm']; ?>" data-toggle="modal" data-target="#mHWCChangeDIMM">
                                    <img src="views/assets/img/change.png" width="18" height="18" />
                                </button>
                                                               
                                <button class="btn btnTabla btnRemoveDIMMs" idsyshwchange="<?php echo $valueD['id_dimm']; ?>">
                                        <img src="views/assets/img/minus.png" width="18" height="18" />
                                </button>
                                <input type="checkbox" class="selectall" name="selectedAllDimms[]" value="<?php echo $valueD['id_dimm']; ?>">
                            </div>
                        </td>
                        <td>
                            <?php echo ++$total; ?>
                        </td>
                        <td>
                            <?php echo $valueD['gdc']; ?>
                        </td>
                        <td>
                            <?php echo $valueD['brand']; ?>
                        </td> 
                        <td>
                            <?php echo $valueD['item_name']; ?>
                        </td>
                        <td>
                            <?php echo $valueD['model']; ?>
                        </td>
                        
                    </tr>
                    <?php endforeach?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th colspan="4">&nbsp;&nbsp;&nbsp;Check All 
                        <input type="checkbox" id="selectall" name="selectedRemoveItems[]" >

                        &nbsp;&nbsp;&nbsp;&nbsp;With selected: &nbsp;&nbsp;
                        <button class="btn btnTabla" data-toggle="modal" data-target="#mHWCChangeDIMM">
                                    <img src="views/assets/img/change.png" width="18" height="18" />
                                </button> Change All Selected
                                                               
                                <button class="btn btnTabla" data-toggle="modal" data-target="#mHWCRemoveDIMM">
                                        <img src="views/assets/img/minus.png" width="18" height="18" />
                                </button> Remove All Selected
                                

                        </th>
                        <th colspan="2"></th>
                    </tr>
                    </tfoot>
                
            </table>

        </td>


    </tr>

    <tr>
        <td style="text-align: center;">
            <section class="content">
                <h6>SSDs</h6>
                <br />
                <button type="button" class="btn btn-primary btn-cabecera" data-toggle="modal" data-target="#mHWCAddSSD">
                    Add Storage Device
                </button>
            </section>
        </td>
        <td style="width:90%">
            <table id="hwChangeTabSSD"  class="table tableHWC">
                <thead>
                    <tr>
                        <th>NUM</th>
                        <th>GDC</th>
                        <th>Brand</th>
                        <th>Item name</th>
                        <th>Model</th>
                        <th>Features</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </td>
    </tr>
    </tbody>
</table>
</div>

<div class="bloque grid2">
    <h3>Ticket Details</h3>
    <form method="POST" class="formTickets">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-text titleitemschanged">Ticket No:</span>
            <input class="form-control input-lg inputitemschanged"
            name="ticketName"
            type="text" value="<?php echo $ticketName;?>" readonly>
        </div>
        <div class="input-group">                    
            <span class="input-group-text titleitemschanged">System ID:</span>
            <input class="form-control input-lg inputitemschanged"
            name="systemID"
            type="text" value="<?php echo $systemTest;?>" readonly>
        </div>

        <input type="hidden" value="<?php echo $technician_id?>" name="tec_id">
    </div>
    <div class="grid3">
        <div class="itemsEnter"><h5>Connected Items</h5>
        <div class="input-group ingrItemChanged"> 
                <span class="input-group-text titspanItemchanged1">Item</span>
                <input class="form-control titinforItemChanged" type="text" value="Mcode / GDC" readonly>
                <input class="form-control titinforItemChanged" type="text" value="Model" readonly>
                <input class="form-control titinforItemChanged" type="text" value="Location" readonly>
                <span class="input-group-text titspanItemchanged">X</span>
            </div>
 
        </div>    

        <div class="itemsLeave"><h5 style="border-top: ridge;margin-top: 4%;">Disconnected Items</h5>
        <div class="input-group ingrItemChanged"> 
                <span class="input-group-text titspanItemchanged1">Item</span>
                <input class="form-control titinforItemChanged" type="text" value="Mcode / GDC" readonly>
                <input class="form-control titinforItemChanged" type="text" value="Model" readonly>
                <input class="form-control titinforItemChanged" type="text" value="Location" readonly>
                <span class="input-group-text titspanItemchanged">X</span>
            </div>

            
        </div>

        <input type="hidden" id="listaItemstoRemDB" name="listaItemstoRemDB">
    </div>

    <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default">Close</button>
           <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    <?php
        $crearTicket = new ControladorTickets();
        $crearTicket -> ctrCrearTicket();
    ?>
    </form>
</div>
    
    

</div>

</div> <!--card body-->
    </div> <!--card-->
    </div> <!-- col12 -->
    </div> <!-- row -->
    </div> <!-- contentainer-fluid -->
</section>
</div>



<!-- Add DIMM -->
<div class="modal fade" id="mHWCAddDIMM">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#007bff;">Add DIMM</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-primary card-outline">
      <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
<p>Enter the GDCs</p>
          <div class="input-group mb-3" id="divAgregarDIMMInputs">

          </div>
                   
        <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-default clearDivNewDIMMs" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
        </div>

        </div> <!-- /.form-group -->
       </div><!-- /.modal-body --> 
              <?php
                $locNewDIMMs = new ControladorHardwareToChange();
                $locNewDIMMs -> ctrUpdateNewDimms($systemTest);
              ?>

      </form>
     </div><!-- card card-primary --> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/custom/js/syshwchange.js"></script>
<script src="views/assets/custom/js/tickets.js"></script>


