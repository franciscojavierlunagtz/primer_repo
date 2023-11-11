<?php

// Tabla de base de datos a usar
$table = 'cpus';

// Llave primaria a usar
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'product_name', 'dt' => 0),
    array( 'db' => 'qdf',  'dt' => 1),
    array( 'db' => 'step',   'dt' => 2),
    array( 'db' => 'mcode', 'dt' => 3),
    array( 'db' => 'serial', 'dt' => 4),
	array( 'db' => 'ubication', 'dt' => 5),
	array( 'db' => 'status', 'dt' => 6),
    array( 'db' => 'team',  'dt' => 7),
    array( 'db' => 'waic',   'dt' => 8),
    array( 'db' => 'reserved', 'dt' => 9),
    array( 'db' => 'wip', 'dt' => 10,
    'formatter' => function($d, $row){
        return '<textarea style="border:none;" rows="1" cols="16">'.$row["wip"].'</textarea>';
                   }),
    array( 'db' => 'comments', 'dt' => 11,
    'formatter' => function($d, $row){
        return '<textarea style="border:none;" rows="1" cols="16">'.$row["comments"].'</textarea>';
    }),
	array( 'db' => 'id', 'dt' => 12,
    'formatter' => function($d, $row){
        return '<button class="btn btnEditarcpu" idcpu="'.htmlspecialchars(json_encode($row[12]), ENT_QUOTES, 'UTF-8').'" data-toggle="modal" data-target="#modal-edit-cpu"><img src="views/assets/img/edit_icon.png" width="27" height="27" /></button>
                <button class="btn btnEliminarcpu" idcpu="'.htmlspecialchars(json_encode($row[12]), ENT_QUOTES, 'UTF-8').'"><img src="views/assets/img/trash_icon.png" width="27" height="27"/></button>';
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
