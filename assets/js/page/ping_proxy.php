<?php
header('Content-Type: text/plain');
header('Access-Control-Allow-Origin: *');

$target_ip = isset($_GET['host']) ? $_GET['host'] : '';

if (filter_var($target_ip, FILTER_VALIDATE_IP)) {
    $ping_url = "https://ping.js.org/ping?host={$target_ip}";
    $ping_result = file_get_contents($ping_url);
    echo $ping_result;
} else {
    echo 'Invalid IP address.';
}
