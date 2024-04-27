<?php
function AES_Encrypt($string, $key, $aes_iv) {
	return base64_encode(openssl_encrypt($string, "AES-128-CBC", $key, $options=OPENSSL_RAW_DATA, hex2bin($aes_iv)));
}

function AES_Decrypt($string, $key, $aes_iv) {
	return openssl_decrypt(base64_decode($string), "AES-128-CBC", $key, $options=OPENSSL_RAW_DATA, hex2bin($aes_iv));
}
?>