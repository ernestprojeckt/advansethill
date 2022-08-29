<?php
require_once('PDOservice.php');
$pdoService = new PDOservice();
$pdoService->createUserTable();
header('Location: /PDOP/index.php');