<?php

include("sql.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);







function speichern ($name,$ablage,$autor,$genre)
{

    $con_id=open_db("Bibliothek");
    $result=$con_id->query("INSERT INTO bib (Buchname,Ablageort,Autor,genre) VALUES ('$name', '$ablage','$autor','$genre')");


    return true;

}


function show_datas($name,$ablage,$autor,$genre)
{
  $con_id=open_db('Bibliothek');
  $get_data=$con_id->query("SELECT * FROM bib");
  #$count = mysqli_num_rows($res);

 while($row=$get_data->fetch_object())
 {
   $data[]=$row;
 }
  return $data;
}



function delete_data($name,$ablage,$autor,$genre)
{

      $con_id=open_db("Bibliothek");
      $result=$con_id->query("delete from bib where Ablageort='$ablage' AND Buchname='$name' AND Autor='$autor' AND genre='$genre'");
      return true;

}



function filternA($ablage)
{
        $con_id=open_db("Bibliothek");
        $result=$con_id->query("SELECT * FROM bib where Ablageort='$ablage'");
        return true;

}
