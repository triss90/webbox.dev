<?php
$title = "Password Generator";
$description = "Secure and easy client-side password generator";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	#password-output {
		font-size: 2rem;
		color: var(--color-purple-2);
		background: var(--color-white-2);
		line-break: anywhere;
		border-radius: 1rem;
		min-height: 100%;
		padding: 2rem;
		display: flex;
		align-items: center;
		justify-content: center;
	}
</style>

<div class="wrapper" id="password-generator">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Generate Random password</h1>
					<h2 class="small center ">Passwords are generated in the browser and never leaves your computer!</h2>
					<hr>
				</div>
			</div>
			
			<div class="row">
				<div class="tiny-12 medium-6">
					
					<label for="password-length">Select Password Length:</label>
					<div class="select">
						<select title="Select the length of your password." name="password-length" id="password-length">
							<optgroup label="Weak">
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12" selected>12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
							</optgroup>
							<optgroup label="Strong">
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
								<option value="60">60</option>
								<option value="61">61</option>
								<option value="62">62</option>
								<option value="63">63</option>
								<option value="64">64</option>
								<option value="65">65</option>
								<option value="66">66</option>
								<option value="67">67</option>
								<option value="68">68</option>
								<option value="69">69</option>
								<option value="70">70</option>
								<option value="71">71</option>
								<option value="72">72</option>
								<option value="73">73</option>
								<option value="74">74</option>
								<option value="75">75</option>
								<option value="76">76</option>
								<option value="77">77</option>
								<option value="78">78</option>
								<option value="79">79</option>
								<option value="80">80</option>
								<option value="81">81</option>
								<option value="82">82</option>
								<option value="83">83</option>
								<option value="84">84</option>
								<option value="85">85</option>
								<option value="86">86</option>
								<option value="87">87</option>
								<option value="88">88</option>
								<option value="89">89</option>
								<option value="90">90</option>
								<option value="91">91</option>
								<option value="92">92</option>
								<option value="93">93</option>
								<option value="94">94</option>
								<option value="95">95</option>
								<option value="96">96</option>
								<option value="97">97</option>
								<option value="98">98</option>
								<option value="99">99</option>
								<option value="100">100</option>
								<option value="101">101</option>
								<option value="102">102</option>
								<option value="103">103</option>
								<option value="104">104</option>
								<option value="105">105</option>
								<option value="106">106</option>
								<option value="107">107</option>
								<option value="108">108</option>
								<option value="109">109</option>
								<option value="110">110</option>
								<option value="111">111</option>
								<option value="112">112</option>
								<option value="113">113</option>
								<option value="114">114</option>
								<option value="115">115</option>
								<option value="116">116</option>
								<option value="117">117</option>
								<option value="118">118</option>
								<option value="119">119</option>
								<option value="120">120</option>
								<option value="121">121</option>
								<option value="122">122</option>
								<option value="123">123</option>
								<option value="124">124</option>
								<option value="125">125</option>
								<option value="126">126</option>
								<option value="127">127</option>
								<option value="128">128</option>
							</optgroup>
							<optgroup label="Unbelievable">
								<option value="256">256</option>
								<option value="512">512</option>
								<option value="1024">1024</option>
								<option value="2048">2048</option>
							</optgroup>
						</select>
						<!-- <span class="focus"></span> -->
					</div>
					
					<br>
					
					<div class="checkbox-group">
						<div class="checkbox">
							<input class="checkbox-input" type="checkbox" name="lowercase" id="lowercase" checked>
							<label class="checkbox-label"for="lowercase"></label>
						</div>
						<label for="lowercase">Include Lowercase Characters (e.g. <i>abcdefgh</i>)</label><br>
						
						<div class="checkbox">
							<input class="checkbox-input" type="checkbox" name="uppercase" id="uppercase" checked>
							<label class="checkbox-label" for="uppercase"></label>
						</div>
						<label for="uppercase">Include  Uppercase Characters (e.g. <i>ABCDEFGH</i>)</label><br>
						
						<div class="checkbox">
							<input class="checkbox-input" type="checkbox" name="numbers" id="numbers" checked>
							<label class="checkbox-label" for="numbers"></label>
						</div>
						<label for="numbers">Include Numbers (e.g. <i>123456</i>)</label><br>
						
						<div class="checkbox">
							<input class="checkbox-input" type="checkbox" name="symbols" id="symbols">
							<label class="checkbox-label" for="symbols"></label>
						</div>
						<label for="symbols">Include Symbols (e.g. <i>@#$%</i>)</label><br>
					</div>
					
					<br>
					
					<button onclick="generatePassword()">Generate Password</button>
				</div>
				<div class="tiny-12 medium-6" style="position: relative;">
					<div id="password-output" style="display:flex;">
						<h2 class="small center">Generated Password...</h2>
					</div>
					<button class="tiny" id="outputCopy" style="position:absolute;right:1rem;top: 1rem;">Copy Password</button>
				</div>
			</div>
			
		</section>
		
		<section class="content_block">
			
			<h2>Passwords - Best practise</h2>
			<br>
			<h3>Keep your passwords strong</h3>
			<ul>
				<li>Use a minimum of 10 symbols, including numbers, both uppercase and lowercase letters, and special symbols.</li>
				<li>Even better, use passphrases consisting of a minimum of 15 symbols using letters and numbers.</li>
			</ul>
					
			<h3>Avoid common password weaknesses</h3>
			<ul>
				<li>Easy-to-guess passwords, especially "password"</li>
				<li>Your name, the name of your spouse or partner name, or other names</li>
				<li>A string of numbers or letters like “1234” or “abcd”, or simple patterns of letters on the keyboard, like “asdfg”</li>
				<li>Your phone number or your license plate number, anybody’s birth date, or other information easily obtained about you (e.g., your address, town or alma mater)</li>
				<li>Passwords of all the same letter</li>
				<li>Words that can be found in the dictionary</li>
				<li>Default passwords, even if they seem strong</li>
				<li>Any of the above followed or preceded by a single digit</li>	
			</ul>

			<h3>Protect your password</h3>
			<ul>
				<li>It is vital to remember your password without writing it down somewhere, so choose a strong password or passphrase that you will easily remember. If you have a lot of passwords, you can use password management tools, but you must choose a strong master key and remember it.</li>
				<li>Be aware of how passwords are sent securely across the Internet. URLs (web addresses) that begin with “https://” rather than “http://” are more likely to be secure for use of your password.</li>
				<li>If you suspect that someone else may know your current password, change it immediately.</li>
				<li>Change your password periodically (every 90 days for a strong password, every 180 days for a passphrase), even if it hasn't been compromised.</li>
				<li>Don't type your password while anyone is watching.</li>
				<li>Avoid using the same password for multiple websites containing sensitive information.</li>
			</ul>
					
			<h3>Follow password policy best practices for system administrators</h3>
			<ul>
				<li>Configure a minimum password length of at least 10 characters for passwords or 15 for passphrases.</li>
				<li>Enforce password history, with at least 10 previous passwords remembered.</li>
				<li>Set a minimum password age of 3 days.</li>
				<li>Set a maximum password age of 90 days for passwords and 180 days for passphrases.</li>
				<li>Enable the setting that requires passwords to meet complexity requirements. This setting can be disabled for passphrases but it is not recommended.</li>
				<li>Reset local admin passwords every 180 days. This can be done with the free Netwrix Bulk Password Reset tool.</li>
				<li>Reset service accounts passwords once a year during maintenance.</li>
				<li>For domain admin accounts, use strong passphrases with a minimum of 15 characters.</li>
				<li>Track all password changes by enabling password audit policies.</li>
				<li>Create email notifications for password expiration.</li>
			</ul>
							
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>


<script src="/password-generator/password.js"></script>
<script>generatePassword();</script>

<?php include_once("../_inc/footer.php"); ?>

<div class="w_box bottom right">
	<button class="w_close" onclick="wCloseWidget(this)">✕</button>
	<div class="w_content" style="text-align: left;"></div>
</div>
<script>
	var gradientCSS = new ClipboardJS('#outputCopy');
	gradientCSS.on('success', function(e) {
		var id = window.setTimeout(function() {}, 0);
		while (id--) {
			window.clearTimeout(id);
		}
		document.querySelector('.w_content').innerHTML = "Copied: <code>"+e.text+"</code>";
		document.querySelector('.w_box').classList.add("w_animate");
		setTimeout(function(){ document.querySelector('.w_box').classList.remove("w_animate"); }, 2000);
		e.clearSelection();
	});
</script>





