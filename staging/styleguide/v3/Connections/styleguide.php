<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_styleguide = "www.theonthai.com"; //$hostname_styleguide = "www.theonthai.com";
$database_styleguide = "theontha_styleguide";
$username_styleguide = "theontha_theon";
$password_styleguide = "gd5bpqf7";
$styleguide = mysql_pconnect($hostname_styleguide, $username_styleguide, $password_styleguide) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_select_db($database_styleguide, $styleguide);
?>
