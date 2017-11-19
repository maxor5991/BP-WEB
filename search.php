<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once 'config.php';

function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT tiempo, velocidad, direccion, altitud FROM viajes WHERE direccion LIKE '%$search%' ";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>$row[tiempo] $row[velocidad] $row[direccion] $row[altitud]</a></p>";
  }
}

search();