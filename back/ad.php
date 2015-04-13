<?php

session_start(); // инициализация данных в сесии

include 'rule.php';
 
 
$table = "hydradmins"; 
 

if(isset($_POST["login"])&&isset($_POST["pass"])){//if
//данные с формы пришли проверить
// делаем запрос к базе
$login = $_POST["login"];
$pass = $_POST["pass"];
//=======  в этом месте поставить экранирование строки

mysql_connect($hostname,$username,$password) or die("No connection"); 
mysql_select_db($dbName) or die(mysql_error());  

$query = "SELECT * FROM  $table WHERE login='".$login."' AND pass='".$pass."'"; 
/* Выполнить запрос. Если произойдет ошибка - вывести ее. */ 
$res = mysql_query($query) or die(mysql_error()); 

$number = mysql_num_rows($res); //если нашли запись по логину 
// ответ проверим	


if($number==1){// проверку прошла

$_SESSION["login"] = $_POST["login"]; // в сессии есть админ

}//if проверка логин по базе
else{ // не прошла проверку на пароль и логин 
// вывести форму
$_SESSION["login"] = null; // нет входа
include 'admin_login.php';
exit;

}
}// if проверка данных с формы
//--------------------------------------------------------------


if(isset($_SESSION["login"])){
//проверить логин


if($_SESSION["login"]!="superadmin"&&$_SESSION["login"]!=null){echo "ord"; }// вывести кабинет обычного админа


}else{//end if SESSION
// если нет сесии тоже вывести форму входа
include 'admin_login.php';
exit;


}//end IF проверки сесиии  
//--------------------------------------------------------------

 

 
  ?>
