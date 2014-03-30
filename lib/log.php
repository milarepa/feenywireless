<?php
class ProcLog {
  /*
   * custom login class.
   * needs more work in session so
   * that its persistant (cookie maybe) - but the idea
   * is there.
   * */

  private $password;
  private $name;
  private $conn;
  public $message;

  public function __construct() {
    $this->conn = new mysqli("localhost", "root", "xxx", "feeny");
    if($this->conn->connect_errno) {
        $this->message = "database failed to connect";
    }
    $this->password = $_POST['pass'];
    $this->name = $_POST['name'];
  }

  public function login() {

    $q = "SELECT user_name, password_hash, client_id from users";

    if(!$stmt = $this->conn->prepare($q)) {
      $this->message = $this->conn->error;
      return False;
    }
    else {
      if($stmt->execute()) {
          $this->message = " statement executed ";
          if($stmt->bind_result($n,$p,$id)) {
            $stmt->fetch();
            if($n == $this->name && $p == md5($this->password)) {
              $this->message = "Login Successfull.";
            } else {
              $this->message = "You Are NOT logged in.<br />";
            }
          }
      } else {
        $this->message .= " statement failed ";
      }
    }
  }

  public function getData() {
    $rdata .= "Your account name is : " . $this->name . "<br />";
    $rdata .= "Your secret pass is : " . $this->password . "<br />";
    $rdata .= "Your ID is : " . $this->id . "<br />";
    return $rdata;
  }
}
?>
