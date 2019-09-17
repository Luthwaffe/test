<?php
	 function isAcceptedUsername($username) {
		  return preg_match('/^[a-z0-9]{2,7}$/i',$username) ;
	 }
	 function AcceptedPassword($password) {
	 	return preg_match('/^[a-z]{1}[0-9]{1}[A-Z]{1}[@]{1}$/i', $password) ;
	 }
	 
	 // Cara menggunakan fungsi di atas
	 if (isAcceptedUsername("aaa1ng")) {
		 echo "Username Is Valid" ;
	 } else {
		 echo "Username Is Invalid" ;
	 }
	 {echo "</br>";}
	 if (AcceptedPassword("p@ssW0rd")){
	 	echo "password is valid";
	 }	else {
	 	echo "password is invalid";
	 }

?>