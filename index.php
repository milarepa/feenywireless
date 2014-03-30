<?php
include("lib/lgn.php");
?>
<html>
  <head>
    <title>FeenyWireless</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fwjs.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
      <center><h2>Login Simulation using Ajax, jQuery and PHP</h2></center>
    <div id="loginbox">
      <form method="post" name="postForm">
        <ul>
          <li>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="tom" /><br />
            <label for="pass">Passwd: </label>
            <input type="password" name="pass" id="pass" placeholder="easy123" /><br />
            <label for="udata">Unique data</label>
            <input type="text" name="udata" id="udata" />
            <span id="success"></span>
            <span class="throw_error"></span>
          </li>
        </ul>
        <input type="submit" value="Send" />
      </form>
      </div>
      <label id="phpdata" for="php_data">Text back from lib/lgn.php</label>
      <div id="php_data"><?php echo $return_data_string; ?></div>
    </div>
  </body>
</html>
