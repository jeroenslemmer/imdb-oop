<?php


	$password = 'het is hier koel';

	$result = password_verify ($password , password_hash($password, PASSWORD_DEFAULT));

	echo $result;