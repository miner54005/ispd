<?php
	$fname = filter_var(trim($_POST['FName']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
	$sname = filter_var(trim($_POST['SName']), FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) <2 || mb_strlen($login) >8) {
		echo "Недопустима довжина логіна";
		exit();
	}
?>