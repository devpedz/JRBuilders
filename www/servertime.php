<?php
header('Content-Type: application/json');

// Get current time
$date = new DateTime();
$hours = $date->format('H');
$minutes = $date->format('i');
$seconds = $date->format('s');

// Return the time as JSON
echo json_encode([
    'hours' => $hours,
    'minutes' => $minutes,
    'seconds' => $seconds
]);
