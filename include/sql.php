<?php
function open_db($db)
{
   include("sql_param.php");
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   return $mysqli= new mysqli($host, $user, $password,$db);
}