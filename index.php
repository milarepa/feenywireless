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
    <div id="loginbox">
      <form method="post" name="postForm">
        <ul>
          <li>
            <label>AJAXED jQuery to PHP</label>
            <input type="text" name="name" id="name" placeholder="Enter some text here">
            <span class="throw_error"></span>
          </li>
        </ul>
        <input type="submit" value="Send" />
      </form>
      </div>
      <label id="phpdata" for="php_data">Entered Text back from lib/lgn.php</label>
      <div id="php_data"><?php echo $data; ?></div>
    </div>
  </body>
</html>
