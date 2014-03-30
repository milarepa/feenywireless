<?php
include('log.php');
/**
 * testing goodies. rather do unit tests but time doesnt permit
 * */

if($login = new ProcLog()) {
  print "Object creation and connection successfull<br />";
} else {
  print "object not working<br />";
  }

if($login->login()) {
  print "login successfull";
} else {
  print $login->message;
}

?>
