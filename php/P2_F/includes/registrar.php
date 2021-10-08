<?php
include("./gestion_BD.php");

function handler($pdo,$table)
{
    
    $datos = $_REQUEST;
    if (count($_REQUEST) < 4) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (nombre, descripcion, localizacion, distancia)
                        VALUES (?,?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['localizacion'], $_REQUEST['distancia']);
        echo $a;
        $consult = $pdo->prepare($query);
        echo $consult;
        $a=$consult->execute(array($_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['localizacion'], $_REQUEST['distancia'] ));
        echo $a;
        if (1>$a)echo "InCorrecto";
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = $table2;
handler( $pdo,$table);
?>