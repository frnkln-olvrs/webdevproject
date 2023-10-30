<?php 
  DEFINE('DB_User', 'root');
  DEFINE('DB_Password','root');
  DEFINE('DB_Host','localhost');
  DEFINE('DB_Name','db');

  $dbc = @mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name)
  OR dies('Could not connect to MySQL: '.mysql_connect_errno(), DB_connect_error());
?>