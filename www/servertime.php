<?php
header('Content-Type: application/json');

// Get current time
$use24HourClock = isset($_GET['use24HourClock']) ? (bool)$_GET['use24HourClock'] : true;
$date = new DateTime();
$hours = $use24HourClock ? $date->format('H') : $date->format('g');
$minutes = $date->format('i');
$seconds = $date->format('s');

// Return the time as JSON
echo json_encode([
    'hours' => $hours,
    'minutes' => $minutes,
    'seconds' => $seconds
]);
