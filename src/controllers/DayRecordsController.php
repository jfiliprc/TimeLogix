<?php
session_start();
requireValidSession();

$date = (new DateTime())->getTimestamp();
$today = strftime('%d, %B, %Y', $date);
$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', ['today' => $today]);