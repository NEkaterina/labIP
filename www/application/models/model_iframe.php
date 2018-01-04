<?php
class Model_Iframe extends Model
{
    
	public function get_data()
	{	
		$db = Db::getConnection();
        $sql = 'SELECT city.id_city, city.nameCity FROM city';
        $result = $db->query($sql);
        $index = array();
        $i=0;
        while($row=$result->fetch()) {
            $index[$i]['id_city'] = $row['id_city'];
            $index[$i]['nameCity'] = $row['nameCity'];
            $i++;
        }
     /*   while($row = mysqli_fetch_array($city)) {
    $id_city = $row['id_city'];
      echo '<option  value="'.$id_city.'">'.$row['nameCity'].'</option>';

}*/
        return $index;
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

