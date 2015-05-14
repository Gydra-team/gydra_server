

<?php

include "rule.php";

if( !isset($_SESSION[$username]) ){
    header("location:admin_login.html");
    exit();
}

//Присвоим значения, взятые методом POST.
//Здесь был id, но он теперь AUTO_INCREMENT
$workstate=mysql_real_escape_string($_POST['workstate']); //статус работы
$warestate=mysql_real_escape_string($_POST['warestate']); //статус прошивки
$firmware=mysql_real_escape_string($_POST['firmware']); //номер прошивки
$password=mysql_real_escape_string($_POST['password']); //пароль
$client=mysql_real_escape_string($_POST['client']); //имя клиента
$comment=mysql_real_escape_string($_POST['comment']); //коментарий 
$json_ware=mysql_real_escape_string($_POST['json_ware']); //Карта из массива
$json_stab=mysql_real_escape_string($_POST['json_stab']); //Ещё карта из массива
$descript=mysql_real_escape_string($_POST['descript']); //Описание установки
$clir_1=mysql_real_escape_string($_POST['clir_1']);
$clir_2=mysql_real_escape_string($_POST['clir_2']); 
 
//Обратимся к бд

mysql_select_db($dbName);

//Выставим кодировку
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
 
//Распределим в таблицу установок всё присвоенное выше^, кроме clir_1 и clir_2
 $ustanovka=mysql_query("INSERT INTO Plants (workstate,
   warestate,
   firmware,
   password,
   client,
   comment,
   json_ware,
   json_stab,
   descript) VALUES('$workstate',
   '$warestate',
   '$firmware',
   '$password',
   '$client',
   '$comment',
   '$json_ware',
   '$json_stab',
   '$descript')");
//Узнаем корректность размещения данных.
if ($ustanovka=='true') 
{echo "Установка установилась";}
else{echo "Установка не установилась";}
?>


