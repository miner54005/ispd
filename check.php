<?php 
	$fname = filter_var(trim($_POST['fname']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$sname = filter_var(trim($_POST['sname']), FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


	$mysql = mysqli_connect('localhost', 'root', 'root', 'rse_db');
	$mysql->query("INSERT INTO `info_client` (`fname`, `name`, `sname`, `login`, `pass`) VALUES ('$fname', '$name', '$sname', '$login', '$pass')");
	$mysql->close();
?>
