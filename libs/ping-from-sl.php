<?php
// Get client IP
$clientIp = $_SERVER['REMOTE_ADDR'];

// Define the URL to ping
$pingUrl = "http://185.200.244.78:3000/?ping={$clientIp}";

// Use cURL to send a GET request to the ping URL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $pingUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    return;
} else {
    // Decode the JSON response into an associative array
    $data = json_decode($response, true);
    
    // Retrieve only the 'time' field from the JSON response
    $time = isset($data['time']) ? $data['time'] : null;
    
    // Check if time is numeric
    if (is_numeric($time)) {
        // Print the time
        echo  $time . " ms";
    }
}
?>
