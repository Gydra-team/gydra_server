<?php

session_start(); // инициализация данных в сесии


include 'safemysql.class.php';
$db = new SafeMysql(array("login" => $login, "pass" => $password,"hydradmin" => $dbName, 'charset' => 'utf8_unicode_ci'));


if(isset($_POST["login"])&&isset($_POST["pass"])){//if
//данные с формы пришли проверить
// делаем запрос к базе
// ответ проверим	
if($number==1){// проверку прошла

$_SESSION["login"] = $_POST["login"]; // в сессии есть админ

}//if проверка логин по базе
else{ // не прошла проверку на пароль и логин 
// вывести форму
$_SESSION["login"] = null; // нет входа
}
}// if проверка данных с формы
//--------------------------------------------------------------


if(isset($_SESSION["login"])){
//проверить логин

if($_SESSION["login"]=="superadmin"){ }// вывести кабинет супер администратора

if($_SESSION["login"]!="superadmin"&&$_SESSION["login"]!=null){ }// вывести кабинет обычного админа


}else{//end if SESSION
// если нет сесии тоже вывести форму входа



}//end IF проверки сесиии  
//--------------------------------------------------------------

 

 
  ?>
