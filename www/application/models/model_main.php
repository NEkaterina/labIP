<?PHP  
header("Content-Type: text/html; charset=utf-8");
?>
<?php
class Model_Main extends Model
{
public static function register($name, $email,$tema, $message)
{
    ?> <script>alert('Ваша заявка принята! Мы обязательно свяжемся с Вами в ближайшее время.', top.location.href="index.php" )</script><?php
    $db = Db::getConnection();
    $sql = 'INSERT INTO comment (name, email,tema, message) VALUES (:username, :email,:sales, :message)';
    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':username', $name, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':sales', $tema, PDO::PARAM_STR);
    $result->bindParam(':message', $message, PDO::PARAM_STR);
    return $result->execute();
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

