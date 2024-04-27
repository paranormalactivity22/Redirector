<?php
require_once("config.php");

include("./antibots.php");
require("./methods/caesar.php");
require("./methods/vigenere.php");
require("./methods/AES.php");


if(isset($_GET['link']))
{
	$real_url = caesarShift(vigenere(AES_Decrypt($_GET["link"], $aes_key, $aes_iv), $passcode, false), -$shift_key);
	if(filter_var($real_url, FILTER_VALIDATE_URL)) {
		header('Location: '.$real_url);
	}
	else {
		die("The URL shortcut is invalid.");
	}
}
?>