<?php
$pageName = "Password Generator";
$pageDescription = "The quick and easy password generator";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>

<div class="container">
    <h1>Secure Password Generator</h1>
    <h5>Generate passwords securely on your device. No information is sent to our servers! Source code is available <a href="" title="password generator sourcecode">here</a></h5><br>


    <div class="row">
        <div class="col-12 col-md-6">

            <label class="" for="security">Password Length</label>
            <select class="custom-select" title="Select the length of your password." name="passwordLength" id="passwordLength">
                <optgroup label="Weak">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </optgroup>
                <optgroup label="Strong">
                    <option value="16" selected>16</option>
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
            <br><br>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="symbols" id="symbols" checked="checked">
                <label class="custom-control-label" for="symbols">Include Symbols (e.g. @#$%)</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="numbers" id="numbers" checked="checked">
                <label class="custom-control-label" for="numbers">Include Numbers (e.g. 123456)</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="lowercase" id="lowercase" checked="checked">
                <label class="custom-control-label" for="lowercase">Include Lowercase Characters (e.g. abcdefgh)</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="uppercase" id="uppercase" checked="checked">
                <label class="custom-control-label" for="uppercase">Include  Uppercase Characters (e.g. ABCDEFGH)</label>
            </div>
            <br>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="save" id="save">
                <label class="custom-control-label" for="save">Save Configuration</label>
            </div>
            <button id="buttonSubmit" type="button" class="btn btn-info btn-block" onclick="passwordGenerator()" style="margin-top: 2.2rem;">Generate Password</button>
            <button id="buttonLoad" class="btn btn-info btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled="">
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Generating...
            </button>

        </div>
        <div class="col-12 col-md-6">
            <div class="card text-white bg-info mb-3" style="display: none;">
                <div class="card-header">Randomly Generated Password</div>
                <div class="card-body">
                    <p class="card-text" id="output" style="font-size: 2rem;"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-dark mb-3" >
                <div class="card-header">Passwords - Best practise</div>
                <div class="card-body">
                    <h4 class="card-title">Keep your passwords strong</h4>
                    <p class="card-text"
                        <ul>
                            <li>Use a minimum of 10 symbols, including numbers, both uppercase and lowercase letters, and special symbols.</li>
                            <li>Even better, use passphrases consisting of a minimum of 15 symbols using letters and numbers.</li>
                        </ul>
                    </p><br>

                    <h4 class="card-title">Avoid common password weaknesses</h4>
                    <p class="card-text"
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
                    </p><br>

                    <h4 class="card-title">Protect your password</h4>
                    <p class="card-text"
                        <ul>
                            <li>It is vital to remember your password without writing it down somewhere, so choose a strong password or passphrase that you will easily remember. If you have a lot of passwords, you can use password management tools, but you must choose a strong master key and remember it.</li>
                            <li>Be aware of how passwords are sent securely across the Internet. URLs (web addresses) that begin with “https://” rather than “http://” are more likely to be secure for use of your password.</li>
                            <li>If you suspect that someone else may know your current password, change it immediately.</li>
                            <li>Change your password periodically (every 90 days for a strong password, every 180 days for a passphrase), even if it hasn't been compromised.</li>
                            <li>Don't type your password while anyone is watching.</li>
                            <li>Avoid using the same password for multiple websites containing sensitive information.</li>

                        </ul>
                    </p><br>

                    <h4 class="card-title">Follow password policy best practices for system administrators</h4>
                    <p class="card-text"
                        <ul>
                            <li>Configure a minimum password length of at least 10 characters for passwords or 15 for passphrases.</li>
                            <li>Enforce password history, with at least 10 previous passwords remembered.</li>
                            <li>Set a minimum password age of 3 days.</li>
                            <li>Set a maximum password age of 90 days for passwords and 180 days for passphrases.</li>
                            <li>Enable the setting that requires passwords to meet complexity requirements. This setting can be disabled for passphrases but it is not recommended.</li>
                            <li>Reset local admin passwords every 180 days. This can be done with the free Netwrix Bulk Password Reset tool.</li>
                            <li>Reset service accounts passwords once a year during maintenance.</li>
                            <li>For domain admin accounts, use strong passphrases with a minimum of 15 characters.</li>
                            <li>Track all password changes by enabling password audit policies. This can be done with Netwrix Auditor for Active Directory.</li>
                            <li>Create email notifications for password expiration. This can be done with the free Netwrix Password Expiration Notifier tool.</li>
                        </ul>
                    </p><br>

                </div>
            </div>

        </div>
    </div>

</div>

<?php include('../_inc/scripts.php'); ?>
<script>

    var storedPasswordLength = localStorage.getItem('passwordLength');
    var storedSymbols = localStorage.getItem('symbols');
    var storedNumbers = localStorage.getItem('numbers');
    var storedLowercase = localStorage.getItem('lowercase');
    var storedUppercase = localStorage.getItem('uppercase');

    if (storedPasswordLength != '') {
        //console.log(storedPasswordLength);

        console.log($('#passwordLength option[value="'+storedPasswordLength+'"]').attr('selected', 'selected'));

    }

    if (storedSymbols == 'false') {
        $('#symbols').prop("checked", false);
    }
    if (storedNumbers == 'false') {
        $('#numbers').prop("checked", false);
    }
    if (storedLowercase == 'false') {
        $('#lowercase').prop("checked", false);
    }
    if (storedUppercase == 'false') {
        $('#uppercase').prop("checked", false);
    }

    function passwordGenerator() {

        // Show button loader
        $('#buttonSubmit').hide();
        $('#buttonLoad').show();

        setTimeout(function() {
            // You must select at least one character set!
            var dataset = '';
            var password = '';
            var output = $('#output');
            var passwordLength = $('#passwordLength').find(':selected').text();
            var symbols = $('#symbols').is(':checked');
            var numbers = $('#numbers').is(':checked');
            var lowercase = $('#lowercase').is(':checked');
            var uppercase = $('#uppercase').is(':checked');
            var save = $('#save').is(':checked');

            if (save === true) {
                localStorage.setItem('passwordLength', passwordLength);
                localStorage.setItem('symbols', symbols);
                localStorage.setItem('numbers', numbers);
                localStorage.setItem('lowercase', lowercase);
                localStorage.setItem('uppercase', uppercase);
            }

            if (symbols === true) {
                dataset += '![]{}()%&*$#^<>~@|';
            }
            if (numbers === true) {
                dataset += '0123456789';
            }
            if (lowercase === true) {
                dataset += 'abcdefghijklmnopqrstuvwxyz';
            }
            if (uppercase === true) {
                dataset += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }
            if (symbols === false && numbers === false && lowercase === false && uppercase === false) {
                password = 'You must select at least one character set!';
            } else {
                for(var i = 0; i < passwordLength; i++) {
                    password += dataset.charAt(Math.floor(Math.random() * dataset.length));
                }
                output.html(password);
            }
            // Hide button loader
            $('.card').show().fadeIn();
            $('#buttonSubmit').show();
            $('#buttonLoad').hide();
        }, 700);

    }

    passwordGenerator()

</script>
<?php include('../_inc/footer.php'); ?>


