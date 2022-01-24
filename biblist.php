<?php


echo"     <link rel='stylesheet' href='stylepages.css'> ";

     echo "<div class='navbar' style='font-family: Arial;''>
               <a href='index.html'>Home</a>
           </div>
           ";


include("include/function.php");
$name=$_POST["title"];
$ablage=$_POST["place"];
$autor=$_POST["autor"];
$genre=$_POST["genre"];






$check_login= show_datas($name,$ablage,$autor,$genre);
   if ($check_login)
   {
   /* Hintergrund schwarz */
   echo "<body style='background-color:black'>";


   echo "<br> <br> <br> <br> ";

echo "<fieldset style='margin: 5px 50px; border-color:#000000; color:white'>
                  <h2>Liste aller gespeicherten Bücher</h2>
              </fieldset>

   <br>
   <br>




   ";



    $show_data=show_datas($name,$ablage,$autor,$genre);
    #var_dump($show_data);

    echo "<table border='1'>";
    echo"<th><font color='white'>id</font> </th>";
    echo"<th><font color='white'>Buchname</font> </th>";
    echo"<th><font color='white'>Autor</font> </th>";
    echo"<th><font color='white'>Ablageort</font> </th>";
    echo"<th><font color='white'>Genre</font> </th>";
    echo"<th><font color='white'>Aktionen</font> </th>";
    echo "<tbody id='result'>";
    foreach($show_data as $key => $val)
    {
    echo"<tr bgcolor=#FFFFFF class='tr'>";

        echo "<td>",$val->id,"</td>";
        echo "<td>",$val->Buchname,"</td>";
        echo "<td>",$val->Autor,"</td>";
        echo "<td style='display:'none;'>",$val->Ablageort,"</td>";
        echo "<td>",$val->genre,"</td>";
        echo "<td> <form action = 'loeschen.php' method='POST'> <input type='hidden' name='id' value='".$val->id."' ><button> löschen</button> </form> </td>";
        echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    #var_dump($show_data);

   }

   else

   echo "Es existieren keine Bücher in der Bibliothek.";


