<?PHP

require_once "ipa.php";
require_once "transliteration.php";

if(isset($_REQUEST['text']))

{

$stext=$_REQUEST['text'];

$ttext = tam2lat($stext);

$ttext1=" ".$ttext." ";

/* Move Punctuations  */

$ttext1 = preg_replace("/([\;\,\.\!\?\"\'\"\(\)])/"," $1 ",$stext);

if(!isset($_REQUEST['target']))
{
$ttext = ipa($ttext);

if($_REQUEST['method'] == 2)
	$ttext = broad($ttext);
	
$sentencesIPA = explode("\n",trim($ttext));
$sentencesTamil = explode("\n",trim($ttext1));

}

else
{

$postdata = http_build_query(
    array(
        'txt' => $stext,
        'source' => 'Tamil',
        'target' => $_REQUEST['target'],
        'transc' => '1',
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);

$ttext = file_get_contents('http://aksharamukha.appspot.com/json', false, $context);

$sentencesIPA = explode("\n",trim($ttext));
$sentencesTamil = explode("\n",trim($stext));
	
}

$wordsIPA = array();
$wordsTamil = array();

for($i=0;$i<count($sentencesIPA);$i++)
	{
		$wordsIPA = array_merge($wordsIPA,explode(" ",$sentencesIPA[$i]));
		$wordsTamil = array_merge($wordsTamil,explode(" ",$sentencesTamil[$i]));

		$wordsIPA[] = "<br/>";
		$wordsTamil[] = "<br/>";
	}
	

if($_REQUEST["tooltip"]==1)
{
  for($i=0;$i<count($wordsTamil);$i++)
{
	echo "<span class=\"ipa-word\" title=\"".$wordsTamil[$i]."\">".$wordsIPA[$i]."</span> ";	
	
	#echo $stext;
}

}

elseif($_REQUEST["tooltip"]==2)
{
  for($i=0;$i<count($wordsTamil);$i++)
{
	echo "<span class=\"ipa-word\" title=\"".$wordsIPA[$i]."\">".$wordsTamil[$i]."</span> ";	
}

}

elseif($_REQUEST["tooltip"]==3)
{
  for($i=0;$i<count($wordsTamil);$i++)
{
	if($wordsIPA[$i] != "<br/>")
		echo "<ruby>".$wordsTamil[$i]."<rt>".$wordsIPA[$i]."</rt></ruby> ";
	else
		echo $wordsIPA[$i];
}

}

elseif($_REQUEST["tooltip"]==4)
{
  for($i=0;$i<count($wordsTamil);$i++)
{
	if($wordsIPA[$i] != "<br/>")
		echo "<ruby>".$wordsIPA[$i]."<rt>".$wordsTamil[$i]."</rt></ruby> ";
	else
		echo $wordsIPA[$i];
}

}


else {

echo $ttext;

}

}

?>