<?php
  $DBASE = mysql_connect("localhost", "hydra", "hydra") or die("Не коннект: " . mysql_error());
  mysql_select_db("hydra") or die("Не коннект.");
  mysql_query("SET NAMES cp1251");
?>
