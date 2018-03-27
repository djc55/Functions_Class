<?php
require "db.php" ;

$mode = $_GET["case_label"];
switch ($mode) {
	case 'insert':
		$date = date('Y-m-d',time());
		$sql = "insert into accounts (id, email, fname, lname, phone, birthday, gender, password) values (1, 'mjlee@njit.edu', 'Mike', 'Lee', '974-555-5555', '2000-05-05', 'male', '1234');";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'update':
		$fname = 'David';
		$sql ="update accounts set password = '4321' where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'display':
		$sql ="select from accounts";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'delete':
		$fname = 'Mike';
		$sql ="delete from accounts where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	default:
		header("Location: errors.php");
		break;
}


?>