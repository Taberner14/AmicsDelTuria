<?php
include("./gestion_BD.php");
include("./portal.php");

function borrado($pdo,$table,$act)
{
    $query = "DELETE FROM $table 
    WHERE id=$act";
    echo $query;
}

$table = $table2;
//borrado( $pdo,$table, $id);
echo "Borro la act $id";
?>