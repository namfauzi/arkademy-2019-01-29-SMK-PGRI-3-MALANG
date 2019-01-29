<?php
$dbconn3 = pg_connect("host=localhost port=5432 dbname=arkademy user=postgres password=root");

if (!$dbconn3) {
    echo "Error";
}else
{
  //  echo "sukses";
}
$sql =pg_query($dbconn3, "SELECT * FROM bio");
while($row = pg_fetch_assoc($sql))
{
    $data['Data'] = $row;
}

if(isset($data))
{
    header('Content-Type: application/json');
    echo json_encode($data);
}

?>