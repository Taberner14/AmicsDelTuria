<?php
include("./gestion_BD.php");
function handler($pdo,$table)
{
    
    $rows=consultar($pdo,$table);
    if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach ( array_keys($rows[0])as $key) {
            echo "<th>", $key,"</th>";
        }
        print "</thead>";
        foreach ($rows as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                echo "<td id='negro'>", $val, "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}


try{$table = $table2;
    handler($pdo,$table);}
catch (PDOException $e) {
echo "Failed to get DB handle: " . $e->getMessage() . "\n";
exit;
}

    ?>