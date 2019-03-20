<?php

$validationToken = $_SERVER['HTTP_VALIDATION_TOKEN'];
header("Validation-Token: {$validationToken}");

$jsonBody = file_get_contents('php://input');
file_put_contents('php://stderr', json_encode($jsonBody, TRUE) . "\n");

// you can do whatever with $jsonBody depending on your requirements
