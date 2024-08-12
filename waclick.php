<?php
// waclick.php

// Set the log file path
$logFile = 'click_log.txt';

// Get the current date and time
$dateTime = date('Y-m-d H:i:s');

// Log the click with date and time
file_put_contents($logFile, $dateTime . "\n", FILE_APPEND);

// Return a success response
echo "Logged";
?>
