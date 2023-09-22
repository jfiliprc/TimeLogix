<?php
session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = strftime('%d, %B, %Y', $date);
loadTemplateView('day_records', ['today' => $today]);