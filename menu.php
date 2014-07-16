<?PHP 

/*
 * Copyright (C) 2014 Vinodh Rajan vinodh@virtualvinodh.com
 *
 * This file is a part of Anunaadam.
 *
 * Anunaadam is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version. This program is distributed in the hope that it
 * will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General
 * Public License for more details. You should have received a copy of the GNU
 * Affero General Public License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */


session_start ();
require_once "translation.php";

include "analyticsSharing.php";

$jscss = '
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/anunaadam.js"></script>

<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.min.css"	rel="stylesheet" />
<link type="text/css" href="css/anunaadam.css" rel="stylesheet" />';

$header = '
<div style="background-color:;">
<table align="center" style="margin-top:20px;">
	<tr>
	  <td align="center">
			<img src="images/400p.png" height="120" style="float:left;margin-right:30px" >
	  </td>
	  <td align="center">
<h1 align=center> <span class="head uiTran">'.lanconTrnL("அனுநாதம்",$_SESSION['lang']).'</span> <span class="divider">|</span> <span class="head">ənʉnɑːd̪əm</span></h1>
<h2 class="subtitle"> <span class="head-sub"><span class="uiTran">'.lanconTrnL("தமிழ் ஒலிப்பு எழுத்து மாற்றி",$_SESSION['lang']).'</span></h2>

	  </td>	
	  <td align="center">
	    
	  </td>
	</tr>
</table>
</div>
';


if (isset ( $_SESSION ['lang'] )) {
	if ($_SESSION ['lang'] == "ta") {
		$checkedTamil = "checked";
	}
	if ($_SESSION ['lang'] == "en") {
		$checkedEnglish = "checked";
	}
} else {
	$checkedTamil = "checked";
}


$leftmenu = '
<div class="sidemenu-left">
<ul id="menu-left">
  <li><a href="/"><span class="uiTran">'.lanconTrnL("முகப்பு",$_SESSION['lang']).'</span></a></li>
  <li><a href="help-ta">உதவி</a></li>
  <li><a href="help-en">Help</a></li>
  <li><a href="feedback"><span class="uiTran">'.lanconTrnL("கருத்து",$_SESSION['lang']).'</span></a></li>
  <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6XUMYC94KPXUW">Donate</a></li>
  <li><a href="about">பற்றி | About</a></li>
  <li><a href="transcription">Transcription</a></li>  

  <li class="ui-state-disabled"><a href="#"><b><span class="uiTran">'.lanconTrnL("மற்ற கருவிகள்",$_SESSION['lang']).'</span></b></a></li>
  <li><a href="http://www.virtualvinodh.com/aksharamukha" title="எழுத்துமுறை மாற்றி"><span class="uiTran">'.lanconTrnL("அக்ஷரமுகம்",$_SESSION['lang']).'</span></a></li>
  <li ><a href="http://www.avalokitam.com" title="யாப்பு மென்பொருள்"><span class="uiTran">'.lanconTrnL("அவலோகிதம்",$_SESSION['lang']).'</span></a></li>
  
</ul>
<br/>
<span class="menu-title uiTran">'.lanconTrnL("மொழி",$_SESSION['lang']).'</span>
<div id="language" style="margin-top:10px;margin-bottom:15px;font-size:85%;">
<input type="radio" id="tamil" name="lang" value="ta" ' . $checkedTamil . '><label for="tamil">Tamil</label>
<input type="radio" id="english" name="lang" value="en" ' . $checkedEnglish . ' ><label for="english">English</label>
</div>'.$sharing.'</div>';

$rightmenu = '
<div class="sidemenu-right">
<div id="menu-left">

<span class="menu-title uiTran">'.lanconTrnL("ஒலிபெயர்ப்பு முறை",$_SESSION['lang']).'</span>
<div id="method" style="margin-top:10px;margin-bottom:15px">
<input type="radio" id="broad" name="method" value=2 checked><label for="broad"><span class="uiTran">'.lanconTrnL("பரவலான",$_SESSION['lang']).'<span></label>
<input type="radio" id="narrow" name="method" value=1 ><label for="narrow"><span class="uiTran">'.lanconTrnL("குறுகலான",$_SESSION['lang']).'<span></label>
<br/><br/>
<span class="menu-title uiTran">'.lanconTrnL("பிற எழுத்துமுறைகள்",$_SESSION['lang']).'</span>
<select style="margin-bottom:15px;margin-top:10px;" id="lang-trans">';

if($_SESSION['lang'] == "ta") {

$rightmenu .= '
 
<option value="IPA">ஐ.பி.ஏ</options>
<option value="Telugu">தெலுங்கு</option>
<option value="Kannada">கன்னடம்</option>
<option value="Malayalam">மலையாளம்</option>
<option value="Devanagari">தேவநாகரி (ஹிந்தி)</option>
<option value="Gujarati">குஜராத்தி</option>
<option value="Punjabi">பஞ்சாபி (குர்முகி)</option>
<option value="Bengali">வங்காளம்</option>
<option value="Urdu">உருது</options>
<option value="Grantha">கிரந்தம்</options>
<option value="TamilGrantha">தமிழ்-கிரந்தம்</options>
</select> ';
}

else
{
$rightmenu .= '
 
<option value="IPA">IPA</options>
<option value="Telugu">Telugu</option>
<option value="Kannada">Kannada</option>
<option value="Malayalam">Malayalam</option>
<option value="Devanagari">Devanagari (Hindi)</option>
<option value="Gujarati">Gujarati</option>
<option value="Punjabi">Punjabi (Gurmukhi)</option>
<option value="Bengali">Bengali</option>
<option value="Urdu">Urdu</options>
<option value="Grantha">Grantha</options>
<option value="TamilGrantha">Tamil-Grantha</options>
</select> ';

}

$rightmenu .= '
<hr/>
</div>
<span class="menu-title uiTran">'.lanconTrnL("ஐ.பி.ஏ எழுத்துரு",$_SESSION['lang']).'</span>
<select style="margin-bottom:15px;margin-top:10px;" id="font"> 
<option>Andika</option>
<option>Arial Unicode MS</option>
<option>Charis SIL</option>
<option selected>Dejavu Sans</option>
<option>Dejavu Serif</option>
<option>Doulos SIL</option>
<option>Gentium Plus</option>
<option>Lucida Sans Unicode</options>
<option>Tahoma</option>
</select> <br/> 
<span class="menu-title uiTran">'.lanconTrnL("எழுத்துரு அளவு",$_SESSION['lang']).'</span><br/>
<div id="slider" style="margin-top:10px;margin-bottom:15px"></div>
<hr/> 
<span class="menu-title uiTran">'.lanconTrnL("உரை வெளியீடு",$_SESSION['lang']).'</span> <br/>
<div id="output" style="margin-top:10px;margin-bottom:15px">
<input type="radio" id="IT" name="output" value=1 Checked><label for="IT"><span class="uiTran">'.lanconTrnL("IPA → தமிழ்",$_SESSION['lang']).'</span></label>
<input type="radio" id="TI" name="output" value=2><label for="TI"><span class="uiTran">'.lanconTrnL("தமிழ் → IPA",$_SESSION['lang']).'</label>
<input type="radio" id="IRB" name="output" value=3><label for="IRB"><ruby>தமிழ்<rt>t̪ʌmɪ˞ɻ</rt></ruby></label>
<input type="radio" id="TRB" name="output" value=4><label for="TRB"><ruby>t̪ʌmɪ˞ɻ<rt>தமிழ்</rt></ruby></label>
</div>
</div>
<span class="menu-title uiTran">'.lanconTrnL("கோப்பாக சேமிக்க",$_SESSION['lang']).'</span>
<input type=button value="'.lanconTrnL("அச்சிடுக...",$_SESSION['lang']).'" id="print" style="margin-top:20px;">
<form action="/txt"> <input type=submit value="'.lanconTrnL("TXT கோப்பாக",$_SESSION['lang']).'" href="/txt" id="txt" style="margin-top:10px;"> </form>

</div>
';

$footer = '
<div class="footnote">
<big>|| எல்லாச் சொல்லும் பொருள் குறித்தனவே | </big> 
<span class="grantha-quote">| <ruby>সিদ্ধে<rt>ஸித்³தே⁴</rt></ruby> <ruby>শব্দার্থসংবন্ধে<rt>ஸ²ப்³தா³ர்த²ஸம்ப³ந்தே⁴</rt></ruby> ||</span> <br/><br/>
Copyright © 2014 <a href="http://www.virtualvinodh.com/about">Vinodh Rajan</a>. This software is released under GNU AGPL v3 license. You may read the license <a href="http://www.gnu.org/licenses/agpl.html">here</a></div>
<br/>

';


?>