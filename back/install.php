<?php
require "connect.php";
mysql_query("
CREATE TABLE HYDRADMINS (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Name VARCHAR(23),
  Sname VARCHAR(23),
  Fname varchar(32),  
  date TIMESTAMP,
  INDEX (Name)
) DEFAULT CHARSET=cp1251;" 
);
echo mysql_error();
?>
<br> Done!
