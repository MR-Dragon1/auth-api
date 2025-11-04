<?php
header('Content-Type: application/json');

$valid_user = "mrroger916";
$valid_pass = md5("jasaseo");

echo json_encode([
    "username" => $valid_user,
    "password" => $valid_pass

]);
