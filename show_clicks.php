<?php
// show_clicks.php

// Set the log file path
$logFile = 'click_log.txt';

// Check if the log file exists
if (file_exists($logFile)) {
    // Read the file contents
    $logData = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Display the logged data
    echo "<h1>WhatsApp Button Click Log</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Click Number</th><th>Timestamp</th></tr>";
    foreach ($logData as $index => $line) {
        echo "<tr><td>" . ($index + 1) . "</td><td>" . htmlspecialchars($line) . "</td></tr>";
    }
    echo "</table>";
} else {
    // Log file not found
    echo "<p>No data available.</p>";
}
?>
