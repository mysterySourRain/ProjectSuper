<?php
$conn=pg_connect("host=localhost port=5433 
user=postgres password=tlsql12! dbname=postgres");

if(!$conn){echo "db connect fail:<br /-->\n";}

$query4 = "SELECT * FROM classtab";
$result4 = pg_exec($conn, $query4);

?>
