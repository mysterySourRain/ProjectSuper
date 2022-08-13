<?php
require("phpLogin.php");

$queryStud = "SELECT * FROM student1";
$resultStud = pg_exec($conn, $queryStud);
$rowStud= pg_fetch_array($resultStud);

$querySem = "SELECT * FROM semester where id >= $rowStud[id_starting_sem] and id<=$rowStud[id_last_sem]";
$resultSem = pg_exec($conn, $querySem);
$rowSem = pg_fetch_array($resultSem);

while ($rowSem = pg_fetch_array($resultSem)){
    echo "          <li><a class='dropdown-item' href='#!'>$rowSem[year] $rowSem[sem]</a></li>
    ";
}


?>