<?php

echo"     <link rel='stylesheet' href='stylepages.css'> ";

echo "<div class='navbar' style='font-family: Arial;''>
          <a href='index.html'>Home</a>
      </div>

      <br>
      <br>
      <br>
      ";



include("include/function.php");
$name=$_POST["title"];
$ablage=$_POST["place"];
$autor=$_POST["autor"];
$genre=$_POST["genre"];


$check_login= show_datas($name,$ablage,$autor,$genre);
   if ($check_login)
   {
      echo "<body style='background-color:black'>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
      $delete_data=delete_data($name,$ablage,$autor,$genre);
      echo "<font color='white'>Das Buch ".$name." von ".$autor." wurde aus der Liste entfernt und muss aus ".$ablage." genommen werden.</font>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    $show_data=show_datas($name,$ablage,$autor,$genre);
    #var_dump($show_data);

    echo "<table border='1'>";

       echo"<th><font color='white'>id</font> </th>";
       echo"<th><font color='white'>Buchname</font> </th>";
       echo"<th><font color='white'>Autor</font> </th>";
       echo"<th><font color='white'>Ablageort</font> </th>";
       echo"<th><font color='white'>Genre</font> </th>";
    foreach($show_data as $key => $val)
    {
    echo"<tr bgcolor=#FFFFFF>";
        echo "<td>",$val->id,"</td>";
        echo "<td>",$val->Buchname,"</td>";
        echo "<td>",$val->Autor,"</td>";
        echo "<td>",$val->Ablageort,"</td>";
        echo "<td>",$val->genre,"</td>";
    }

    echo "</table>";
    #var_dump($show_data);

   }
   elseif ($check_login="")
   {
   echo "Bitte etwas eingeben";

   }
   else

   echo "Das Buch existiert nicht in der Liste.";


echo "
<button  style='position:absolute; top: 280px; left: 625px; width: 65px; height: 25px; font-size: 18px; background-color: black;   border-color: black; border-radius: 10px;' type='SUBMIT'>
<a href='deletebib.html'>
<span style='color: white; text-decoration:none;'>zurück</span>
</a>
</button>
            ";

