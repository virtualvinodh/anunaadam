<?PHP

function ipa($text)

{

$text=" ".$text." ";

/* Move Punctuations  */

$text = preg_replace("/([\;\,\.\!\?\"\'\"\(\)])/"," $1 ",$text);
// $text = preg_replace("/(?<=[\w])([\;\,\.\!\?\"\'\"\(\)])/"," $1 ",$text);
// $text = preg_replace("/([\;\,\.\!\?\"\'\"\(\)])(?=[\w])/"," $1 ",$text);

/* Dipthongs */

$text = str_replace("ai","ay",$text); // 5.3.3.1 ii Palatal Approximant ... // ai

$text = str_replace("au","av",$text); // au - dipthong replacement

/* Grantha */

$text = str_replace("j","ʤ",$text);
$text = str_replace("h","ɦ",$text);
$text = str_replace("S","ʂ",$text);
$text = str_replace("srI","ʂrI",$text);

/* Mey */

/* Vallinam */

/* pa */

$text = preg_replace("/(?<=[aAiIuUeEoO])p(?=[aAiIuUeEoO])/","β",$text); // 5.3.1.6 iii Voiced Bilabial Fricative
$text = preg_replace("/(?<=[yrlvZL])p/","β",$text); // 5.3.1.6 iii

$text = preg_replace("/(?<=[GJnVmN])p/","b","$text"); //5.3.1.6 ii voiced bilabial plosive

// 5.3.1.6 i no replacement 

/* ta */

$text = preg_replace("/(?<=[aAiIuUeEoOyrlvZL])t(?=[aAiIuUeEoO])/","ð",$text); // 5.3.1.5 iii Voiced dental Fricative

$text = preg_replace("/(?<=[nV])t/","d̪",$text); // 5.3.1.5 ii Voiced dental plosive

$text = preg_replace("/t/","t̪",$text); // 5.3.1.5 i Voiceless dental plosive

/* Ra */

$text = str_replace("XX","t̺t̺ʳ",$text); // 5.3.1.4 ii & ii find correct name

$text = preg_replace("/(?<=V)X/","d̺ʳ",$text); // 5.3.1.4 iii

// 5.3.1.4 iv & v implemented in idaiyinam section


/* Ta  */

$text = preg_replace("/(?<=[aAiIuUeEoO])T(?=[aAiIuUeEoO])/","ɽ",$text); // 5.3.1.3 iii Retroflex Flap

$text = preg_replace("/(?<=[N])T/","ɖ",$text); // 5.3.1.3 ii Voiced Retroflex Plosive | VT ?

$text = str_replace("T","ʈ",$text); // 5.3.1.3 i Voiceless Retroflex Plosive

/* ca */

$text = preg_replace("/(?<=[aAiIuUeEoOl])c(?=[aAiIuUeEoO])/","s",$text); // 5.3.1.2 iii voiceless alveolar fricatives 

$text = preg_replace("/(\s)c/","$1s",$text); // 5.3.1.2 iii

$text = preg_replace("/(V)c/","$1s",$text);

$text = preg_replace("/(?<=[J])c/","ʤ",$text); // 5.3.1.2 ii Voiced Post Alveolar affricate - Symbol Changed : d͡ʒ

$text = preg_replace("/c/","ʧ",$text); // 5.3.1.2 i Voicless Post Alveolar Affrivate - Symbol Changed : t͡ʃ



/* ka */

$text = preg_replace("/Gk(?=[iI])/","ŋʲgʲ",$text); // 5.3.2.1 ii Palatized Velar Nasal

$text = str_replace("Gk","ŋg",$text); // 5.3.2.1 Velar Nasal

$text = preg_replace("/(?<=[aAiIuUeEoO])k(?=[iI])/","ç",$text); // 5.3.1.1 viii voiceless palatal fricative

//yrZlLv assumed above. Missing in definiation : eykiya -> eyçiya ; aarkiya -> aarçiya....

$text = preg_replace("/(?<=r)k(?=[aAuUeEoO])/","ɣ",$text); // 5.3.1.1 Vii Voiced Velar Fricative

$text = preg_replace("/(?<=[aAiIuUeEoO])k(?=[aAuUeEoO])/","x",$text); // 5.3.1.1 vi Voicless Velar Fricative

$text = preg_replace("/(?<=[ylvZL])k(?=[aAuUeEoO])/","x",$text); // above

$text = preg_replace("/ykk/","jcc",$text); // 5.3.1.1 v voiceless palatal plosive

$text = preg_replace("/jkk/","jcc",$text); // above

$text = preg_replace("/(?<=[rylvZLGVNaAiIuUeEoO])k(?=[iI])/","gʲ",$text); // 5.3.1.1 iv Voiced Palatized Velar Plosive

$text = preg_replace("/(?<=[NVmn])k(?=[aAuUeEoO])/","g",$text); // 5.3.1.1 iii voiced velar plosive

$text = preg_replace("/(?<=k)k(?=[iI])/","kʲ",$text); // 5.3.1.1 ii Voiceless velar plosive

// 5.3.1.1 i no relacement //


/* Idaiyinam */

$text = str_replace("Z","ɻ",$text); //5.3.3.6  Retroflex Approximant

$text = preg_replace("/(?<=[aAiIuUeEoO])L(?=[aAiIuUeEoO])/","ɭʼ",$text);  //5.3.3.5 i Lateral Approximant - Ejective

$text = str_replace("L","ɭ",$text); // 5.3.3.5 ii Lateral Approximant

/* 5.3.3.4 no change */

$text = preg_replace("/(?<=[aAiIuUeEoO])[rX](?=[aAiIuUeEoO])/","ɾ",$text); // 5.3.3.3 i Alveolar Tap

/* 5.3.3.3 ii - pure consonant r - no replacement */

$text = preg_replace("/X(?!=[aAiIuUeEoO])/","r",$text); // 5.3.3.3 ii Trill

$text = preg_replace("/(?<=[aAiIuUeEoO])v(?=[aAiIuUeEoO])/","ʋ",$text); // 5.3.3.2 ii labio-dental approximant
$text = preg_replace("/(\s)v(?=[aAiIuUeEoO])/","$1ʋ",$text); // 5.3.3.2 ii
$text = str_replace("vv","ʊ̯ʋ",$text); // 5.3.3.2 i near-close near-back rounded vowel - part of a dipthong
$text = str_replace("v","ʋ",$text);

$text = preg_replace("/yy/","jɪ̯",$text); // 5.3.3.1 i near-close near-front unrounded vowel - part of a dipthong
$text = preg_replace("/y/","ɪ̯",$text); // 5.3.3.1 i near-close near-front unrounded vowel - part of a dipthong

/* Mellinam */

// 5.3.2.6 no replacement 

$text = preg_replace("/[Vn]/","n̺",$text); // 5.3.2.4 Alveolar Nasal (Check Actual name in Wikipedia)

$text = str_replace("n̺d̪","n̪d̪",$text); // 5.3.2.5 Dental Nasal

$text = preg_replace("/(?<=[aAiIuUeEoO])N(?=[aAiIuUeEoO])/","ɳʼ",$text); // 5.3.2.3 ii Retroflex Nasal Ejective

$text = str_replace("N","ɳ",$text); // 5.3.2.3 Retroflex Nasal

$text = str_replace("J","ɲ",$text); // 5.3.2.3 Palatal Nasal

$text = preg_replace("/GG(?=[iI])/","ŋʲŋʲ",$text); // Assumed based on above

$text = str_replace("GG","ŋŋ",$text); // Assumed based on above

$text = str_replace("G","ŋ",$text); // Assumed based on above

/* Uyir */

/* Seperate Pure Vowel Combinations*/

$text = preg_replace("/([aAiIuUeEoO])([aAiIuUeEoO])/","$1_$2",$text);

//return $text;

/* Long O */

$text=preg_replace("/o(\s)/","o·$1",$text); // 5.2.5.2 v 

$text=preg_replace("/(\s)o(?!·)/","$1ʷoː",$text); // 5.2.5.2 iii 
$text=preg_replace("/_o(?!·)/","ʷoː",$text); // 5.2.5.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·])o(?![ː·])/","oː",$text); // 5.2.5.2 i

/* Short o */

$text=preg_replace("/(\s)O(?!·)/","$1ʷo̞",$text); // 5.2.5.1 iii 
$text=preg_replace("/_O(?!·)/","ʷo̞",$text); // 5.2.5.1 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞])O(?![ː·])/","o̞",$text); // 5.2.5.1 i

/* Adding extra symbol for Retroflex Consonants */

$retroflex=array("ɽ","ɖ","ʈ","ɳ","ɭ","ɻ");

foreach ($retroflex as $rf)
      $text = preg_replace("/̞(?=".$rf.")/","̞˞",$text);
	  
/* Long e */

$text=preg_replace("/e(\s)/","e·$1",$text); // 5.2.4.2 v 

$text=preg_replace("/(\s)e(?!·)/","$1ʲeː",$text); // 5.2.4.2 iii 
$text=preg_replace("/_e(?!·)/","ʲeː",$text); // 5.2.4.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞])e(?![ː·])/","eː",$text); // 5.2.5.2 i


/* short e */

$text=preg_replace("/(\s)E(?!·)/","$1ʲɛ̝",$text); // 5.2.4.1 iii 
$text=preg_replace("/_E(?!·)/","ʲɛ̝",$text); // 5.2.4.1 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])E(?![ː·])/","ɛ̝",$text); // 5.2.5.4 i

/* Adding extra symbol for Retroflex Consonants */

foreach ($retroflex as $rf)
      $text = preg_replace("/̝(?=".$rf.")/","̝˞",$text);

/* short u */

$text = preg_replace("/(?<!u)(\S)(?<![bʋpmβ])u/","$1ɨ",$text); // 5.2.3.1 v

$text=preg_replace("/(\s)u(?!·)/","$1ʷʊ",$text); // 5.2.3.1 iii 

$text=preg_replace("/_u(?!·)/","ʷʊ",$text); // 5.2.3.1 iii - puththi_Ottum

$text = preg_replace("/(?<!u\S)([bʋpmβ])u/","$1ʉ̩",$text); // 5.2.3.1  Vii

$text = preg_replace("/([bʋpβm])u/","$1ʉ̩",$text); // 5.2.3.1  Vii

$text = preg_replace("/(?<![bʋpβm])u(\s)/","ɨ$1",$text); // 5.2.3.1 v

$text= preg_replace("/(\s)(\S)(ɨ|ʉ̩)/","$1$2ʊ",$text); // 5.2.5.2 i

$text= preg_replace("/(U)(\S{1,2})ɨ/","$1$2ʊ",$text); // 5.2.5.2 i 

$text= preg_replace("/(ʊ)(\S{1,2})ɨ/","$1$2ʊ",$text);

$text= preg_replace("/(ʊ)(\S{1,2})ʉ̩/","$1$2ʊ",$text);

$text = preg_replace("/(?<![bʋβpm])ʊ(\s)/","ɨ$1",$text); // 5.2.3.1 v

$text = preg_replace("/(?<=[bʋβpm])ʊ(\s)/","ʉ̩$1",$text);

foreach ($retroflex as $rf)
      $text = preg_replace("/ʊ(?=".$rf.")/","ʊ˞",$text);
	  
foreach ($retroflex as $rf)
      $text = preg_replace("/ʉ̩(?=".$rf.")/","ʉ̩˞",$text);
	  
foreach ($retroflex as $rf)
      $text = preg_replace("/ɨ(?=".$rf.")/","ɨ˞",$text); 

/* 
 
$text = preg_replace("/\S(<=!u)\Su/","ɨ",$text); // 5.2.3.1 v
	  
/* Long u */

$text=preg_replace("/U(\s)/","u·$1",$text); // 5.2.3.2 v 

$text=preg_replace("/(\s)U(?!·)/","$1ʷuː",$text); // 5.2.3.2 iii 
$text=preg_replace("/_U(?!·)/","ʷuː",$text); // 5.2.3.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])U(?![ː·])/","uː",$text); // 5.2.3.2 i

/* short i */

$text=preg_replace("/i(\s)/","ɪ·$1",$text); // 5.2.2.1 iii 

$text=preg_replace("/(\s)i(?!·)/","$1ʲɪ",$text); // 5.2.4.2 iii 
$text=preg_replace("/_i(?!·)/","ʲɪ",$text); // 5.2.4.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])i(?![ː·])/","ɪ",$text); // 5.2.5.2 i

foreach ($retroflex as $rf)
      $text = preg_replace("/ɪ(?=".$rf.")/","ɪ˞",$text);

/* Long i */

$text=preg_replace("/I(\s)/","i·$1",$text); // 5.2.2.2 v 

$text=preg_replace("/(\s)I(?!·)/","$1ʲiː",$text); // 5.2.2.2 iii 
$text=preg_replace("/_I(?!·)/","ʲiː",$text); // 5.2.2.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])I(?![ː·])/","iː",$text); // 5.2.2.2 i

/* Long A */

$text=preg_replace("/(\s)A(?!·)/","$1ˀɑː",$text); // 5.2.1.2 iii 
$text=preg_replace("/_A(?!·)/","ˀɑː",$text); // 5.2.1.2 iii - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])A(?![ː·])/","ɑː",$text); // 5.2.1.2 i

/* short a */

/* Transcription of Abbreviation Ignored */

$text=preg_replace("/(\s)a(?!·)/","$1ˀʌ",$text); // 5.2.1.1 vi 
$text=preg_replace("/_a(?!·)/","ˀʌ",$text); // 5.2.1.1 vi - puththi_Ottum

$text=preg_replace("/(?<![aAiIuUeEoOː·̞̝])a(?![ː·])/","ʌ",$text); // 5.2.1.1 i

$text=preg_replace("/ʌ(\s)/","ə$1",$text); // 5.2.1.1 iii

foreach ($retroflex as $rf)
      $text = preg_replace("/ʌ(?=".$rf.")/","ʌ˞",$text);
      
/* Aytham */

$text = str_replace("K","x",$text);
$text = str_replace("xt̪","xð",$text);
$text = str_replace("xk","xx",$text);
      
    
/* Adding extra symbol for Retroflex Consonants Common of U & O */

/* Regex won't accept (?=[Multiple Unicode Chars]) so separating each charcter */

foreach ($retroflex as $rf)
      $text = preg_replace("/ː(?=".$rf.")/","˞ː",$text);

/* Fixing kaaZBbu kaLaip kaLaippu bugs */

$text=str_replace("βp","pp",$text);
$text=str_replace("β ","p ",$text);
$text = preg_replace("/ʧ([ \n])s/","ʧ$1ʧ",$text); // ac samayam -> ac camayam \\ Check with Newlines ac \n samayam

/* New IPA Convensions */

$text = str_replace("ː","ː",$text);
$text = str_replace("·","ˑ",$text); //
$text = str_replace("ʧ","tʃ",$text);
$text = str_replace("ʤ","dʒ",$text);

//ɨɭ (i- + Refelex -> <u> <Retroflex>

$text=ltrim($text);

return $text;

}

function broad($text)
{

 #$text = str_replace(array("ʲ","ʷ","ˀ"),array("","",""),$text); // Remove Palatalization, Labialization & Glottalization
 $text = str_replace("˞","",$text); // Remove Retroflexion of Vowels   
 $text = str_replace("ʼ","",$text); // Remove ejectives
 $text = str_replace(array("̝","̞","̩","ˀ"),array("","","",""),$text); // Remove vowel position
 
 $text = str_replace("ɨ","ʉ",$text);
 
 /* Replacing narrow transcriptions of Consonants */
 
 $text = str_replace("ɣ","g",$text); // Voiced Velar Fricative to Voiced Velar Plosive
 $text = str_replace("β","b",$text); // Voiced Bilabial Fricative to Voiced Bilabial Plosive
 $text = str_replace("ç","x",$text); // Voiceless Palatal Fricative to Voiceless Velar Fricative
 $text = str_replace("ʊ̯","ʋ",$text); // Non-syllabic near-close near-back rounder vowel to Labio-velar approximant
 $text = str_replace("ð","d̪",$text); // Voiced Dental Fricative to Voiced dental plosive
 $text = str_replace("ɽ","ɖ",$text); // Retroflex flap to Voiced Retroflex plosive
 $text = str_replace("c","k",$text); // Voiceless palatal plosive to Voiceless velar plosive
 $text = str_replace("n̺","n",$text); 
 
 $text = str_replace("x","g",$text); 
 
 $text = str_replace(array("ŋʲ","gʲ","kʲ"),array("ŋ","g","k"),$text);
 
 $text = str_replace("ɪ̯","j",$text);
 
 $text = str_replace("ʌ","ə",$text);
 
 return $text;
 
}

?>