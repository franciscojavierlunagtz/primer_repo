<?php

// Tabla de base de datos a usar
$table = 'dimms';

// Llave primaria a usar
$primaryKey = 'id_dimm';

$columns = array(
    array( 'db' => 'team', 'dt' => 0 ),
    array( 'db' => 'raw_card',  'dt' => 1 ),
    array( 'db' => 'gdc',   'dt' => 2 ),
    array( 'db' => 'serial', 'dt' => 3,),
    array( 'db' => 'brand', 'dt' => 4,),
	array( 'db' => 'item_name', 'dt' => 5,),
	array( 'db' => 'model', 'dt' => 6 ),
    array( 'db' => 'date',  'dt' => 7 ),
    array( 'db' => 'charac',   'dt' => 8 ),
    array( 'db' => 'status', 'dt' => 9,),
    array( 'db' => 'location', 'dt' => 10,),
	array( 'db' => 'reserved', 'dt' => 11,),
	array( 'db' => 'waic', 'dt' => 12,),
    array( 'db' => 'comments', 'dt' => 13,
    'formatter' => function($d, $row){
        return '<textarea style="border:none;" rows="1" cols="16">'.$row["comments"].'</textarea>';
    }),
	array( 'db' => 'id_dimm', 'dt' => 14,
    'formatter' => function($d, $row){
        return '<button class="btn btnEditdimm" iddimm="'.htmlspecialchars(json_encode($row[14]), ENT_QUOTES, 'UTF-8').'" data-bs-toggle="modal" data-bs-target="#modalEditdimm"><img src="vistas/images/icons/edit_icon.png" width="30" height="30" /></button>
                <button class="btn btnEliminardimm" iddimm="'.htmlspecialchars(json_encode($row[14]), ENT_QUOTES, 'UTF-8').'"><i class="fa fa-times"><img src="vistas/images/icons/trash_icon.png" width="30" height="30" /></button>';
    })
);

// Datos de conexión MySQL
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pos2',
    'host' => 'localhost'
);




require( 'ssp.class.php' );

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
