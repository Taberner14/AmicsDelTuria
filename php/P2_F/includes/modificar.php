<?php
include("./gestion_BD.php");

function cogerDatos($pdo,$table,$act)
{
    $query = "SELECT nombre FROM $table 
    WHERE id=$act";
    
    try { 
        $nombre = $pdo->query($query);
        echo $nombre['nombre'];
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
    
}

$table = $table2;
cogerDatos( $pdo,$table, $id);
?>