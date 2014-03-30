<?php
include('log.php');
/*
 * grab data fom POST - where jquery left it.
 **/
 
$login = new ProcLog();

if ($login->login()) {
  $return_data_string = $login->getData();
} else {
  $return_data_string = "login failed or not logged in";
  }

?>
