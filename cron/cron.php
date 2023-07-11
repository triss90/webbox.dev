<?php
$minute = "";
$hour = "";
$day = "";
$month = "";
$weekday = "";
$command = "";

if (isset($_POST['minutes'])) {
	$minutes_post = $_POST['minutes'];
} else {
	$minutes_post = "";
}
if (isset($_POST['hours'])) {
	$hours_post =  $_POST['hours'];
} else {
	$hours_post = "";
}
if (isset($_POST['days'])) {
	$days_post = $_POST['days'];
} else {
	$days_post = "";
}
if (isset($_POST['months'])) {
	$months_post = $_POST['months'];
} else {
	$months_post = "";
}
if (isset($_POST['weekdays'])) {
	$weekdays_post = $_POST['weekdays'];
} else {
	$weekdays_post = "";
}
if (isset($_POST['command'])) {
	$command = $_POST['command'];
} else {
	$command = "";
}
if (isset($_POST['selectMinutes'])) {
	$minutes_post_custom = $_POST['selectMinutes'];
} else {
	$minutes_post_custom = "";
}
if (isset($_POST['selectHours'])) {
	$hours_post_custom = $_POST['selectHours'];
} else {
	$hours_post_custom = "";
}
if (isset($_POST['selectDays'])) {
	$days_post_custom = $_POST['selectDays'];
} else {
	$days_post_custom = "";
}
if (isset($_POST['selectMonths'])) {
	$months_post_custom = $_POST['selectMonths'];
} else {
	$months_post_custom = "";
}
if (isset($_POST['selectWeekdays'])) {
	$weekdays_post_custom = $_POST['selectWeekdays'];
} else {
	$weekdays_post_custom = "";
}



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
} else {
	$minute = "";
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
} else {
	$hour = "";
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
} else {
	$day = "";
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
} else {
	$month = "";
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
} else {
	$weekday = "";
}

echo "<code>".$minute." ".$hour." ".$day." ".$month." ".$weekday." ".$command."</code>";