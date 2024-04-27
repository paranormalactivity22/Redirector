<?php
require_once("config.php");

include("./antibots.php");
require("./methods/caesar.php");
require("./methods/vigenere.php");
require("./methods/AES.php");
?>
<form name="form" action="" method="post">
  <input type="text" name="url" id="url" value="">
    <input type="submit" name="my_form_submit_button" 
           value="Create redirect"/>

</form>
<?php

if(filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
	echo urlencode(AES_Encrypt(vigenere(caesarShift($_POST['url'], $shift_key), $passcode, true), $aes_key, $aes_iv));
}
?>