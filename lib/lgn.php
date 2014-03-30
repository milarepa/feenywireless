<?php
include('log.php');

$login = new ProcLog();

if ($login->login()) {
  $return_data_string = $login->getData();
} else {
  $return_data_string = $login->message;
  }
?>
