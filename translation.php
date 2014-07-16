<?PHP

if (isset ( $_REQUEST ['txt'] )) {
	echo lanconTrn ( trim ( $_REQUEST ['txt'] ), $_REQUEST ['lang'] );
}

function lanconTrnL($text, $lang) 

{
	if ($lang == "en")
		return lanconTrn ( $text, $lang );
	else
		return $text;
}
function lanconTrn($text, $lang) {
	$transString = array (
			"முகப்பு" => "Home",
			"கருத்து" => "Feedback",
			"மற்ற கருவிகள்" => "Other Tools",
			"அக்ஷரமுகம்" => "Aksharamukha",
			"அவலோகிதம்" => "Avalokitam",
			"தமிழ் - IPA" => "Tamil - IPA",
			"பதிவிறக்கம்" => "Download",
			"அனுநாதம் குறித்து கருத்துக்கள், ஆலோசனைகள் ஏதேனும் இருப்பின் தெரியப்படுத்துக:" => "Please provide your feedback and suggestions about Anunaadam here:",
			"பெயர்:" => "Name:",
			"மின்னஞ்சல்:" => "E-mail:",
			"அனுப்புக" => "Send",
			"மொழி" => "Language",
			"தமிழ் ஒலிப்பு எழுத்து மாற்றி" => "Tamil Transcription Tool",
			"ஆரவம்" => "Āravam",
			"ஐ.பி.ஏ எழுத்துரு" => "IPA Font",
			"எழுத்துரு அளவு" => "Font Size",
			"உரை வெளியீடு" => "Text Ouput",
			"கோப்பாக சேமிக்க" => "Save as File",
			"ஒலிபெயர்ப்பு முறை" => "Transcription Method",
			"குறுகலான" => "Narrow",
			"பரவலான" => "Broad",
			"ஐ.பி.ஏ → தமிழ்" => "IPA → Tamil",
			"தமிழ் → ஐ.பி.ஏ" => "Tamil → IPA",
			"TXT கோப்பாக" => "TXT File",
			"யாப்பு மென்பொருள" => "Tamil Prosody Analyzer",
			"எழுத்துமுறை மாற்றி" => "Script Converter",
			"பிற எழுத்துமுறைகள்" => "Other Scripts",
			"அச்சிடுக..." => "Print...",
			"தெலுங்கு" => "Telugu",
			"கன்னடம்" => "Kannada",
			"மலையாளம்" => "Malayalam",
			"ஐ.பி.ஏ" => "IPA",
			"தேவநாகரி (ஹிந்தி)" => "Devanagari (Hindi)",
			"குஜராத்தி" => "Gujarati",
			"பஞ்சாபி (குர்முகி)" => "Punjabi (Gurmukhi)",
			"வங்காளம்" =>  "Bengali",
			"உருதி" => "Urdu",
			"கிரந்தம்" => "Grantha",
			"தமிழ்-கிரந்தம்" => "Tamil-Grantha",
	);
	
	if ($lang == "en") {
		if (array_key_exists($text,$transString))
			return $transString [$text];
		else
			return $text;
	} else {
		$revTs = array_flip ( $transString );
		
		if (array_key_exists($text,$revTs))
			return $revTs [$text];
		else
			return $text;
	}
}

?>