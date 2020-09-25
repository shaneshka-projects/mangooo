<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){

} else {
 $email = $_POST['tildapayment'];
 $email = htmlspecialchars($email);
 $email = urldecode($email);
 $email = trim($email);
 if (mail("shaneshka@inbox.ru", "New order [shaneshka.tilda.ws]", "E-mail: ".$email ,"From: example2@mail.ru \r\n")){
 
 } else {
 
 }
}
?>
