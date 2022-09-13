<?php

$minutes_post = $_POST['minutes'];
$hours_post =  $_POST['hours'];
$days_post = $_POST['days'];
$months_post = $_POST['months'];
$weekdays_post = $_POST['weekdays'];
$command = $_POST['command'];

$minutes_post_custom = $_POST['selectMinutes'];
$hours_post_custom = $_POST['selectHours'];
$days_post_custom = $_POST['selectDays'];
$months_post_custom = $_POST['selectMonths'];
$weekdays_post_custom = $_POST['selectWeekdays'];



if ($minutes_post == "every-minute") {
	$minute = "*";
} elseif ($minutes_post == "even-minutes") {
	$minute = "*/2";
} elseif ($minutes_post == "odd-minutes") {
	$minute = "1-59/2";
} elseif ($minutes_post == "every-5-minutes") {
	$minute = "*/5";
} elseif ($minutes_post == "every-15-minutes") {
	$minute = "*/15";
} elseif ($minutes_post == "every-30-minutes") {
	$minute = "*/30";
} elseif ($minutes_post == "custom") {
	foreach ($minutes_post_custom as $minute_value) {
		$minute .= $minute_value.",";	 
	}
	$minute = rtrim($minute, ',');
}


if ($hours_post == "every-hour") {
	$hour = "*";
} elseif ($hours_post == "even-hours") {
	$hour = "*/2";
} elseif ($hours_post == "odd-hours") {
	$hour = "1-23/2";
} elseif ($hours_post == "every-6-hous") {
	$hour = "*/6";
} elseif ($hours_post == "every-12-hours") {
	$hour = "*/12";
} elseif ($hours_post == "custom") {
	foreach ($hours_post_custom as $hour_value) {
		$hour .= $hour_value.",";	 
	}
	$hour = rtrim($hour, ',');
}


if ($days_post == "every-day") {
	$day = "*";
} elseif ($days_post == "even-days") {
	$day = "*/2";
} elseif ($days_post == "odd-days") {
	$day = "1-31/2";
} elseif ($days_post == "every-5-days") {
	$day = "*/5";
} elseif ($days_post == "every-10-days") {
	$day = "*/10";
} elseif ($days_post == "every-half-month") {
	$day = "*/15";
} elseif ($days_post == "custom") {
	foreach ($days_post_custom as $day_value) {
		$day .= $day_value.",";	 
	}
	$day = rtrim($day, ',');
}


if ($months_post == "every-month") {
	$month = "*";
} elseif ($months_post == "even-months") {
	$month = "*/2";
} elseif ($months_post == "odd-months") {
	$month = "1-31/2";
} elseif ($months_post == "every-3-months") {
	$month = "*/3";
} elseif ($months_post == "every-half-year") {
	$month = "*/6";
} elseif ($months_post == "custom") {
	foreach ($months_post_custom as $month_value) {
		$month .= $month_value.",";	 
	}
	$month = rtrim($month, ',');
}


if ($weekdays_post == "everyday") {
	$weekday = "*";
} elseif ($weekdays_post == "monday-friday") {
	$weekday = "1-5";
} elseif ($weekdays_post == "weekend-days") {
	$weekday = "0,6";
} elseif ($weekdays_post == "custom") {
	foreach ($weekdays_post_custom as $weekday_value) {
		$weekday .= $weekday_value.",";	 
	}
	$weekday = rtrim($weekday, ',');
}

echo "<code>".$minute." ".$hour." ".$day." ".$month." ".$weekday." ".$command."</code>";