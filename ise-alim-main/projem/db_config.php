<?php

require 'Medoo.php';

use Medoo\Medoo;

$database = new Medoo([
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'user_database',
	'username' => 'root',
	'password' => '',

	'charset' => 'utf8mb4',
	'port' => 3306
]);

?>