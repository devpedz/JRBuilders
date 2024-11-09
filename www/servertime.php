<?php
// servertime.php
date_default_timezone_set('Asia/Manila');
// Get current server time
$serverTime = new DateTime("now", new DateTimeZone('UTC')); // UTC timezone or any other timezone you need
echo json_encode(['time' => $serverTime->format('c')]); // 'c' gives the ISO 8601 format
