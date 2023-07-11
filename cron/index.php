<?php
$title = "Crontab Generator";
$description = "Generate Cron jobs easily with a visual generator";

?>

<?php include_once("../_inc/header.php"); ?>

<style>
	select {
		margin-left: 1rem;
		min-width: 75px;
		height: 105px;
		padding: 0.5rem;
	}
	.selection {
		background: var(--color-purple-4);
		border-radius: 0.5rem;
		padding: 0.5rem 0;
	}
</style>


<div class="wrapper" id="cron">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Crontab Generator</h1>
					<h2 class="small center">Generate Cron jobs easily with a visual generator</h2>
					<hr>
				</div>
			</div>
			<form method="post" id="cronform" action="cron/cron.php">
				<div class="row">
					
					<div class="tiny-12">
						<h2>Customise your cronjob</h2>
						<p>Ctrl/shift-click (or command/shift-click on the Mac) to select multiple entries.</p>
					</div>
					
					<!-- Minutes -->
					<div class="tiny-12 small-6 large-4">
						<br>
						<div class="row selection">
							<div class="tiny-12">
								<h3>Minutes</h3>
							</div>
							<div class="tiny-7">
								<div class="radio">
									<input id="minutes1" name="minutes" class="minutes" value="every-minute" type="radio" checked="checked">
									<label for="minutes1" class="radio-label">Every Minute</label>
								</div>
								<div class="radio">
									<input id="minutes2" name="minutes" class="minutes" value="even-minutes" type="radio">
									<label for="minutes2" class="radio-label">Even Minutes</label>
								</div>
								<div class="radio">
									<input id="minutes3" name="minutes" class="minutes" value="odd-minutes" type="radio">
									<label for="minutes3" class="radio-label">Odd Minutes</label>
								</div>
								<div class="radio">
									<input id="minutes4" name="minutes" class="minutes" value="every-5-minutes" type="radio">
									<label for="minutes4" class="radio-label">Every 5 Minutes</label>
								</div>
								<div class="radio">
									<input id="minutes5" name="minutes" class="minutes" value="every-15-minutes" type="radio">
									<label for="minutes5" class="radio-label">Every 15 Minutes</label>
								</div>
								<div class="radio">
									<input id="minutes6" name="minutes" class="minutes" value="every-30-minutes" type="radio">
									<label for="minutes6" class="radio-label">Every 30 Minutes</label>
								</div>
							</div>
							<div class="tiny-5">
								<div class="radio">
									<input id="minutes7" name="minutes" class="minutes" value="custom" type="radio">
									<label for="minutes7" class="radio-label">Custom</label>
								</div>
								<select multiple="" size="10" id="selectMinutes" name="selectMinutes[]">
									<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
								</select>
							</div>
						</div>
						
					</div>
					
					<!-- Hours -->
					<div class="tiny-12 small-6 large-4">
						<br>
						<div class="row selection">
							<div class="tiny-12">
								<h3>Hours</h3>
							</div>
							<div class="tiny-7">
								<div class="radio">
									<input id="hours1" name="hours" class="hours" value="every-hour" type="radio" checked="checked">
									<label for="hours1" class="radio-label">Every Hour</label>
								</div>
								<div class="radio">
									<input id="hours2" name="hours" class="hours" value="even-hours" type="radio">
									<label for="hours2" class="radio-label">Even Hours</label>
								</div>
								<div class="radio">
									<input id="hours3" name="hours" class="hours" value="odd-hours" type="radio">
									<label for="hours3" class="radio-label">Odd Hours</label>
								</div>
								<div class="radio">
									<input id="hours4" name="hours" class="hours" value="every-5-hours" type="radio">
									<label for="hours4" class="radio-label">Every 6 Hours</label>
								</div>
								<div class="radio">
									<input id="hours5" name="hours" class="hours" value="every-12-hours" type="radio">
									<label for="hours5" class="radio-label">Every 12 Hours</label>
								</div>
							</div>
							<div class="tiny-5">
								<div class="radio">
									<input id="hours6" name="hours" class="hours" value="custom" type="radio">
									<label for="hours6" class="radio-label">Custom</label>
								</div>
								<select multiple="" size="10" id="selectHours" name="selectHours[]">
									<option value="0">Midnight</option>
									<option value="1">1am</option>
									<option value="2">2am</option>
									<option value="3">3am</option>
									<option value="4">4am</option>
									<option value="5">5am</option>
									<option value="6">6am</option>
									<option value="7">7am</option>
									<option value="8">8am</option>
									<option value="9">9am</option>
									<option value="10">10am</option>
									<option value="11">11am</option>
									<option value="12">Noon</option>
									<option value="13">1pm</option>
									<option value="14">2pm</option>
									<option value="15">3pm</option>
									<option value="16">4pm</option>
									<option value="17">5pm</option>
									<option value="18">6pm</option>
									<option value="19">7pm</option>
									<option value="20">8pm</option>
									<option value="21">9pm</option>
									<option value="22">10pm</option>
									<option value="23">11pm</option>
								</select>
							</div>
						</div>
					</div>
					
					<!-- Days -->
					<div class="tiny-12 small-6 large-4">
						<br>
						<div class="row selection">
							<div class="tiny-12">
								<h3>Days</h3>
							</div>
							<div class="tiny-7">
								<div class="radio">
									<input id="days1" name="days" class="days" value="every-day" type="radio" checked="checked">
									<label for="days1" class="radio-label">Every Day</label>
								</div>
								<div class="radio">
									<input id="days2" name="days" class="days" value="even-days" type="radio">
									<label for="days2" class="radio-label">Even Days</label>
								</div>
								<div class="radio">
									<input id="days3" name="days" class="days" value="odd-days" type="radio">
									<label for="days3" class="radio-label">Odd Days</label>
								</div>
								<div class="radio">
									<input id="days4" name="days" class="days" value="every-5-days" type="radio">
									<label for="days4" class="radio-label">Every 5 Days</label>
								</div>
								<div class="radio">
									<input id="days5" name="days" class="days" value="every-10-days" type="radio">
									<label for="days5" class="radio-label">Every 10 Days</label>
								</div>
								<div class="radio">
									<input id="days6" name="days" class="days" value="every-half-month" type="radio">
									<label for="days6" class="radio-label">Every Half Month</label>
								</div>
							</div>
							<div class="tiny-5">
								<div class="radio">
									<input id="days7" name="days" class="days" value="custom" type="radio">
									<label for="days7" class="radio-label">Custom</label>
								</div>
								<select multiple="" size="10" id="selectDays" name="selectDays[]">
									<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
								</select>
							</div>
						</div>
					</div>
					
					<!-- Months -->
					<div class="tiny-12 small-6 large-4">
						<br>
						<div class="row selection">
							<div class="tiny-12">
								<h3>Months</h3>
							</div>
							<div class="tiny-7">
								<div class="radio">
									<input id="months1" name="months" class="months" value="every-month" type="radio" checked="checked">
									<label for="months1" class="radio-label">Every Day</label>
								</div>
								<div class="radio">
									<input id="months2" name="months" class="months" value="even-months" type="radio">
									<label for="months2" class="radio-label">Even Days</label>
								</div>
								<div class="radio">
									<input id="months3" name="months" class="months" value="odd-months" type="radio">
									<label for="months3" class="radio-label">Odd Days</label>
								</div>
								<div class="radio">
									<input id="months4" name="months" class="months" value="every-3-months" type="radio">
									<label for="months4" class="radio-label">Every 3 Days</label>
								</div>
								<div class="radio">
									<input id="months5" name="months" class="months" value="every-half-year" type="radio">
									<label for="months5" class="radio-label">Every Half Year</label>
								</div>
							</div>
							<div class="tiny-5">
								<div class="radio">
									<input id="months6" name="months" class="months" value="custom" type="radio">
									<label for="months6" class="radio-label">Custom</label>
								</div>
								<select multiple="" size="10" id="selectMonths" name="selectMonths[]">
									<option value="1">Jan</option>
									<option value="2">Feb</option>
									<option value="3">Mar</option>
									<option value="4">Apr</option>
									<option value="5">May</option>
									<option value="6">Jun</option>
									<option value="7">Jul</option>
									<option value="8">Aug</option>
									<option value="9">Sep</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
								</select>
							</div>
						</div>
					</div>
					
					<!-- Weekday -->
					<div class="tiny-12 small-6 large-4">
						<br>
						<div class="row selection">
							<div class="tiny-12">
								<h3>Weekdays</h3>
							</div>
							<div class="tiny-7">
								<div class="radio">
									<input id="weekdays1" name="weekdays" class="weekdays" value="everyday" type="radio" checked="checked">
									<label for="weekdays1" class="radio-label">Every Weekday</label>
								</div>
								<div class="radio">
									<input id="weekdays2" name="weekdays" class="weekdays" value="monday-friday" type="radio">
									<label for="weekdays2" class="radio-label">Monday-Friday</label>
								</div>
								<div class="radio">
									<input id="weekdays3" name="weekdays" class="weekdays" value="weekend-days" type="radio">
									<label for="weekdays3" class="radio-label">Weekends</label>
								</div>
							</div>
							<div class="tiny-5">
								<div class="radio">
									<input id="weekdays4" name="weekdays" class="weekdays" value="custom" type="radio">
									<label for="weekdays4" class="radio-label">Custom</label>
								</div>
								<select multiple="" size="10" id="selectWeekdays" name="selectWeekdays[]">
									<option value="0">Sun</option>
									<option value="1">Mon</option>
									<option value="2">Tue</option>
									<option value="3">Wed</option>
									<option value="4">Thu</option>
									<option value="5">Fri</option>
									<option value="6">Sat</option>
								</select>
							</div>
						</div>
					</div>
				
				</div>
				
				<div class="row">
					<div class="tiny-12">
						<br>
						<h3>Command to execute:</h3> 
						<input type="text" name="command" id="command" value="mysqldump -u root -p PASSWORD database > /root/db.sql" required/> 	
					</div>
				</div>
				
				<div class="tiny-12 small-2">
					<button id="buttonSubmit" type="submit" class="block" style="margin-top: 1.75rem;padding:0.9rem 0;">Generate Cronjob</button>
					<button id="buttonLoad" class="block" type="button" style="display:none;margin-top: 2rem;" disabled="">
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						Loading...
					</button>
				</div>
				
			</form>
		</section>

		<section class="content_block" id="output-wrapper" style="display: none;">
			<div class="row">
				<div class="tiny" id="output"></div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous"></script>
<script>

const selectMinutesElement = document.querySelector('#selectMinutes');
const selectHoursElement = document.querySelector('#selectHours');
const selectDaysElement = document.querySelector('#selectDays');
const selectMonthsElement = document.querySelector('#selectMonths');
const selectWeekdaysElement = document.querySelector('#selectWeekdays');

selectMinutesElement.addEventListener('change', function(e) {
	document.querySelector('#minutes7').checked = true;
});

selectHoursElement.addEventListener('change', function(e) {
	document.querySelector('#hours6').checked = true;
});

selectDaysElement.addEventListener('change', function(e) {
	document.querySelector('#days7').checked = true;
});

selectMonthsElement.addEventListener('change', function(e) {
	document.querySelector('#months6').checked = true;
});

selectWeekdaysElement.addEventListener('change', function(e) {
	document.querySelector('#weekdays4').checked = true;
});


$(function () {
	$('form').on('submit', function (e) {
		e.preventDefault();
		$('#buttonSubmit').hide();
		$('#buttonLoad').show();
		setTimeout(function(){
			$.ajax({
				type: 'post',
				url: '/cron/cron.php',
				data: $('#cronform').serialize(),
				success: function(response) {
					$('#buttonLoad').hide();
					$('#buttonSubmit').show();
					$('#output-wrapper').css("display", "block");
					$('#output').html(response);
				}
			});
		}, 500);
	});
});

</script>

<?php include_once("../_inc/footer.php"); ?>





