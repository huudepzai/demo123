<?php
use \Firebase\JWT\JWT;

$key = $_GET['key'];
/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = $_GET['access_token'];
$decoded = JWT::decode($jwt, $key, array('HS256'));

print_r($decoded);


?>
