
<?php
	$host="webhome.cc.iitk.ac.in";
	$user = $_POST["username"];
	$pass = $_POST["password"];
// 	$id = ftp_connect($ftp_server,22,10) or die("Could not connect to $ftp_server");
// 	echo"Connecting as </t> $user <br/>";
// 	$reply = ftp_login($id, $user, $pass);
// 	ftp_close($id);
// 	if(!$reply){
// 		echo"<br/>Authentication Failed!!!<br/>";
// 		// header("location: index.php");
// 	}
// 	else{
// 		// header("location: https://drive.google.com/open?id=0Bzqs3ZK8LWVTNm41Q3d6bEticDA");
// 		header("location: http://172.20.192.99/Link");
// 	}
$ssh = 1;//
ssh2_connect($host);
if (false === $ssh) {
    die('connection failed');
}
else{
	echo "conn :)";
}

// $auth = ssh2_auth_password($ssh, $user, $pass);
// if (false === $auth) {
//     die('authentication failed');
// }
// else{
// 	echo "auth";
// }
?>