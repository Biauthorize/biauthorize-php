<?php
// Initial Biauthorize PHP Library to verify authtokens

function Biauthorize_VerifyToken($user, $token) {
	$ret = file_get_contents("http://biauthorize.com/api/verify_token/"+$user+"/"+$token);
	if ($ret == "true") {
		return true;
	} else {
		return false;
	}
}

?>