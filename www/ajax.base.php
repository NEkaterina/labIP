
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mystroycompany';


$link = mysqli_connect($hostname, $username, $password, $database); 
    mysqli_query($link, "SET NAMES 'cp1251' ");

$categories =  $_POST["id_city"];
    $query ="SELECT
    project.id_project AS id,
    project.nameProject AS title,
                 project.cost AS news_text,
                  city.nameCity AS categ
              FROM
                  project
               JOIN
                  city
              ON
              project.city_id = city.id_city
              WHERE
                 project.city_id = ".$categories."";
 
$city = mysqli_query($link, $query) or die("РћС€РёР±РєР° " . mysqli_error($link)); 

  echo '<table class="table"  >';
  echo '<thead>';
  echo '<tr>';
  echo '<th style="text-align:center" >№</th>';
 
  echo '<th style="text-align:center">Назваие проекта</th>';
 
  echo '<th>Стоимость</th>';
  echo '<th>Город</th>'; 

  echo '</tr>';
  echo '</thead>';
  echo '<tbody>'; 
 $i=1;
while($row = mysqli_fetch_array($city)) {
 
    echo '<tr>';
    echo '<td align ="center">'. $i. '</td>';

    echo '<td align ="center"><a class="imagetip"  data-toggle="modal" data-target="#myModal" > ' . $row['title'] . '

    </td>';
 
 
    echo '<td>'. $row['news_text']. '</td>';
   echo '<td>' . $row['categ'] . '</td>';
 

         echo '</tr>'; 
$i ++;
}
echo '</tbody>';
  echo '</table>';


?>

