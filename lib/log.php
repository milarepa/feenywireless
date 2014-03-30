<?php
class ProcLog {
  /*
   * handles field validation
   * for login. Single user
   * login function can be replaced
   * with a mysqli connection
   * */
  
  private static $password;
  private static $name;
  
  public function __construct() { // this should accept username and password
    $this->password = 'easy123';  // apon creation of login object
    $this->name = 'tom';
    $this->_udata = '';
  }
   
  public function login() {
 
    $_name = strip_tags($_POST['name']);
    $_pass = strip_tags($_POST['pass']);
    $this->_udata = $_POST['udata'];
    
    if($this->name == $_name) {
      if($this->password == $_pass) {
        return True;
      } else {
        return False;
      }
    }
  }
  
  public function getData() {
    $rdata .= "Your account name is : " . $this->name . "<br />";
    $rdata .= "Your secret pass is : " . $this->password . "<br />";
    $rdata .= "Your Unique Data is : " . $this->_udata . "<br />";
    return $rdata;
  } 
}
?>
