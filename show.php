<?php
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


   echo "<br>";

    echo "<h2>Auswertung </h2>";
    echo "<br>";
    echo "<font color='white'>Titel suchen: ";

    echo "<input id='search' type='text' placeholder='Gib den Titel ein.' onKeyup='search();'>";
    echo "<br> <br>";

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

   echo "<script>

    function search()
    {
        var search = document.getElementById('search').value;
        var table = document.getElementById('result');
        var rows = document.getElementsByClassName('tr');
        var on = 0;
        for ( var i = 0; i < rows.length; i++ )
        {
          var td = rows[i].getElementsByTagName('td')[1];
              if (td)
              {
                txtValue = td.textContent || td.innerText;
                if (txtValue.indexOf(search) > -1)
                {
                  rows[i].style.display = '';
                }
                else
                {
                  rows[i].style.display = 'none';
                }
              }
        }
    }



    </script>";


