<?PHP 

require_once "menu.php";

require_once ('recaptchalib.php');
require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;

$publickey = "Enter_your_RECAPTCHA_public_key";
$privatekey = "Enter_your_RECAPTCHA_private_key";

include_once "recaptchakeys.php";

$error = null;

if ($_POST ["recaptcha_response_field"]) {
	$resp = recaptcha_check_answer ( $privatekey, $_SERVER ["REMOTE_ADDR"], $_POST ["recaptcha_challenge_field"], $_POST ["recaptcha_response_field"] );
	
	if ($resp->is_valid) {
		if($_SESSION['lang']=='en')
			$msgSent = "<big><big>Your feedback has been received. Thanks</big></big>";
		else	
			$msgSent = "<big><big>தங்களது கருத்து பெறப்பட்டது. நன்றி</big></big>";
		
		$message_body = "From:" . $_POST ["nm"] . "\n\n" . "Email:" . $_POST ["em"] . "\n\n" . $_POST ["ftxt"];
                
$mail_options = [
    "sender" => "vinodh.vinodh@gmail.com",
    "to" => "vinodh.vinodh@gmail.com",
    "subject" => "Feedback for Anunaadam",
    "textBody" => $message_body
]
		;
		
		$message = new Message ( $mail_options );
		$message->send ();
	} else {
		$error = $resp->error;
		
		if($_SESSION['lang']=='en')
			$msgError = "<big><big>Incorrect ReCaptcha text. Please try entering the correct text</big></big>";
		else				
			$msgError = "<big><big>ரீ-கேப்ட்சா பிழை. மீண்டும் ரீ-கேப்ட்சா உரையினை சரியான முறையில் உள்ளீடு செய்க</big></big>";
	}
}

?>
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
		<br />

		<div class="uiTran"><?PHP echo lanconTrnL("அனுநாதம் குறித்து கருத்துக்கள், ஆலோசனைகள் ஏதேனும் இருப்பின் தெரியப்படுத்துக:",$_SESSION['lang']); ?></div>

		<br />

		<form name="vinodh" method="post"
			action="feedback">
			<div class="uiTran"><?PHP echo lanconTrnL("பெயர்:",$_SESSION['lang']); ?></div>
			<input name="nm"
				value="<?PHP if(isset($msgError)) echo $_POST["nm"] ?>"></input>
			<div class="uiTran"><?PHP echo lanconTrnL("மின்னஞ்சல்:",$_SESSION['lang']); ?></div>
			<input name="em"
				value="<?PHP if(isset($msgError)) echo $_POST["em"] ?>"></input> <br />
			<br />
			<textarea cols="50" rows="12" name="ftxt">
<?PHP if(isset($msgError)) echo $_POST["ftxt"]?>
</textarea>
			<br />

<?PHP echo recaptcha_get_html($publickey, $error);?>

<br /> <input type="submit"
				value="<?PHP echo lanconTrnL("அனுப்புக",$_SESSION['lang']); ?>"
				id="send">
		</form>
		<br />
<?PHP if(isset($msgError)) echo $msgError; ?>
<?PHP if(isset($msgSent)) echo $msgSent; ?>
<br /> <br />

</div>
<?PHP echo $footer; ?>
</body>
</html>