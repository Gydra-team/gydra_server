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

 
  

// добавить выборку с базы пароля и id
//if($pass==$pass_db&&$id_db==$id){

//$t1 = 1;$t2 = 2;
//$m1 = 1;$f1 = 1;
//$s1 = 1;$ph1 = 1;
//$pass = 1;$id = 1;

 mysql_connect($hostname,$username,$password) or die("No connection"); 
 mysql_query("SET NAMES utf8");
 mysql_query("SET COLLATION_CONNECTION=utf8_bin");

 mysql_select_db($dbName) or die(mysql_error()); 
 



$query = "SELECT * FROM collector_t" ;//выберем все с базы 
$res_body = mysql_query($query) or die(mysql_error()); 
$number_body = mysql_num_rows($res_body); // сколько резльтатов пришло


  	    
// вывод данных по датчикам

if($number_body>=1){
  $key=0;
$arr_json = array();

  	while ($row_body=mysql_fetch_array($res_body)) { 
    	 $arr_json[$key]= json_encode($row_body);   		 
  		$key++;
  	     // echo ;
  	}//while 
echo    implode("$~*~$",$arr_json); 
 

  }else{echo "null";}


mysql_query($query) or die( mysql_error());
mysql_close();
//} // провка пройдена по паролю
?>