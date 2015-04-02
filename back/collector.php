<?php
// принятие строки и разбор ее по образцу

$userstable = "collector_t"; 
include "rule.php";


$id_db = 13; // $_GET['id']; 
$pass_db = 123456; // $_GET['pass']; 
// пришло с контролера 

 $t1 = 0;$t2 = 0;
 $m1 = 0;$f1 = 0;
 $s1 = 0;$ph1 = 0;
 $pass = 0;$id = 0;

 mysql_connect($hostname,$username,$password) or die("No connection"); 
 mysql_query("SET NAMES utf8");
 mysql_query("SET COLLATION_CONNECTION=utf8_bin");
 mysql_select_db($dbName) or die(mysql_error());

if(isset($_POST["delite"])){
$query ="DELETE FROM   collector_t   ";
mysql_query($query) or die( mysql_error());
mysql_close();
}else{ // если это не удаление

 //$time_s =  $_GET['time_s']; // температура с 1 датчика
 $t1 =  $_GET['t1']; // температура с 1 датчика
 $t2 =  $_GET['t2']; // температура с 1 датчика
 $f1 =  $_GET['f1']; // влажность
 $m1 =  $_GET['m1']; // уровень воды в баке
 $s1 =  $_GET['s1']; // уровень освещения
 $ph1 =  $_GET['ph1']; // уровень ph
 //$pass =  $_GET['pass']; //
 $id =  $_GET['id']; //  



// добавить выборку с базы пароля и id
//if($pass==$pass_db&&$id_db==$id){

//$t1 = 1;$t2 = 2;
//$m1 = 1;$f1 = 1;
//$s1 = 1;$ph1 = 1;
//$pass = 1;$id = 1;

 
 



$query = "INSERT INTO   $userstable SET id='".$id."'  , t1='".$t1."', t2='".$t2."', f1='".$f1."', m1='".$m1."', s1='".$s1."', ph1='".$ph1."'";
mysql_query($query) or die( mysql_error());
mysql_close();
}
//} // провка пройдена по паролю
?>