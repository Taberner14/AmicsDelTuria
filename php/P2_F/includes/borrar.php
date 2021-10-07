<?php
include("./gestion_BD.php");

function borrado($pdo,$table,$act)
{
    $query = "DELETE FROM $table 
    WHERE id=$act";
    echo "Borrada la actividad con identificador $act";
    
    try { 
        $pdo->exec($query);
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
    
}

$table = $table2;
borrado( $pdo,$table, $id);
?>