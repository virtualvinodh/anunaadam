<?PHP require_once "menu.php" ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anunaadam : Tamil Transcription Tool</title>

<?PHP echo $jscss; ?>

</head>
<body>

<?PHP echo $header; ?>

<?PHP echo $leftmenu; ?>

<div class="container-cont">
<div class="quote">
<p>உந்தி முதலெழுங் காற்றுப் பிறந்துர முஞ்சிரமும் <br/>
பந்த மலிகண் டமுமூக்கும் உற்றண்ணம் பல்லுடனே <br/>
முந்து மிதழ்நா மொழியுறுப் பாகு முயற்சியினால் <br/>
வந்து நிகழு மெழுத்தென்று சொல்லுவர் வாணுதலே! </p>
			<p>-- வீரசோழியம்</p>
</div>
<h1>பற்றி</h1>
<p>அனுநாதம் தமிழ் எழுத்துக்களை சர்வதேச ஒலிப்பு எழுத்துகளாக மாற்றும் கருவி ஆகும். 
சர்வதேச ஒலிப்பு எழுத்துக்கள் (ஐ.பி.ஏ) உலகில் உள்ள அனைத்தும் ஒலிகளையும் வரிவடிவில் துல்லியமாக குறிக்க வல்லது. 
இது, தமிழ் எழுத்துக்களில் அமைந்துள்ள உரையினை, தமிழ் மொழியினை அறியாதோரும் மிகச்சரியான முறையில் 
உச்சரிக்க உதவுவது. சர்வதேச எழுத்துள் மட்டுமன்றி இதர இந்திய மொழிகளின் எழுத்துக்களிலும் தமிழ் உச்சரிப்பினை
இக்கருவி வெளியிடவல்லது. </p>

<p>"அனுநாதம்" என்ற சொல்லுக்கு "எதிரொலி" என்பது பொருள். </p>

<p>இக்கருவிக்கு ரெஸ்ட் ஏ.பி.ஐ'யும் உள்ளது கூடவே டெர்மினலில் இருந்தும் இதை செயல்படுத்தலாம்.</p>

<p>இம்மென்பொருள் தற்போது <a href="http://github.com/virtualvinodh/anunaadam">கிட்ஹப்பில்</a> உள்ளது. நீங்க்ளும் இந்த மென்பொருளின் வளர்ச்சியில் பங்களிக்க
விரும்பினால் நிச்சயம் செய்யலாம். </p>

<p>என்னைப்பற்றி அறிந்து கொள்ள எனது <a href="http://www.virtualvinodh.com">தனிப்பட்ட வலைத்தளத்தை</a> காணவும். எனது ஆராய்ச்சியினைப் பற்றி அறிந்து
கொள்ள எனது <a href="http://sachi.cs.st-andrews.ac.uk/people/phd-students/vinodh-rajan/">பல்கலைக்கழக பக்கத்தைக்</a> காணவும். </p>

<h1>About</h1>
<p> Anunaadam is a த்ranscription tool for Tamil. It attempts to transcribe the given Tamil text and 
produce the output in IPA characters. IPA characters are used by linguistics around the world
to accurately represent the sounds of all languages. It aids the pronunciation of Tamil even to
non-native speakers of the language. Apart from IPA, the tool can also transcribe in several
other Indian scripts.</p>

<p>The term "Anunaadam" means echo. </p>

<p>The tool has a REST API and can also be invoked from the Terminal.</p>

<p>The project is currently hosted at <a href="http://github.com/virtualvinodh/anunaadam">Github</a>. 
You can also contribue to the development of this tool.</p>

<p>You can read more about me on my <a href="http://www.virtualvinodh.com">personal site</a> 
and about my research on my <a href="http://sachi.cs.st-andrews.ac.uk/people/phd-students/vinodh-rajan/">university webpage</a>.
</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6XUMYC94KPXUW">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<?PHP echo $footer; ?>
</body>
</html>