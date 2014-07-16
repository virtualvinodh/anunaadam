<?PHP 

ob_start ();
require_once "ipa.php";
require_once "transliteration.php";
ob_end_clean ();

ini_set ( 'default_charset', 'utf-8' );
error_reporting ( E_ERROR | E_PARSE );

$options = getopt ( "", array (
		"narrow::",
		"file::",
		"input:",
		"help::",
		"dispin::",
) );

if (isset($options['h']) || isset($options['help']) )

{

 echo "\nAnunaadam is a Tamil transcription tool\n\n";
 
 echo "Usage: Anunaadam.php [-h] [--help] [--file=file] [--narrow] [--dispin] \n";
 
 echo "
 help   : Help
 file   : Input file. It must be in UTF-8
 dispin : Display the input text
 narrow : Narrow Transcription. By default, the tool gives the broad transcription\n";
 
 echo "\nReads the text from standard input if input file is not provided\n\n";

}

else {

if (! isset ( $options ['file'] ))
	$tamiltext = file_get_contents ( 'php://stdin' );
else
	$tamiltext = file_get_contents ( $options ['file'] );

$lattext = " ".tam2lat($tamiltext)." ";

if (! isset ( $options ['narrow'] ))
	$ipatext = trim(broad(ipa($lattext)));
else
	$ipatext = trim(ipa($lattext));

if(isset($options['dispin']))
	echo "\n".$tamiltext."\n\n";

echo "\n".$ipatext."\n\n";

}

?>