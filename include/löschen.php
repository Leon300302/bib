<?php

include("include/function.php");


$check_login= show_datas($name,$ablage,$autor,$genre);
   if ($check_login)
   {

      $delete_data=delete_data($name,$ablage,$autor,$genre);
      echo "Eintrag ist gelöscht.";

   }
   else
   {
   echo "Ich kann diesen Eintrag nicht löschen, weil er nicht vorhanden ist.";
   }

    var_dump($check_login);