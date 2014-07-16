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

require_once "menu.php";

$stext ='';

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

<?PHP echo $rightmenu; ?>

<div class="container">

<form name="convert" method="post" action="/">

<div class="inp-text">
<textarea rows=19 style="width:100%" style="border:none;" name="source" id="txtbox"><? echo $stext; ?></textarea>
</div>
<div style="float:left;position:relative;width:100%;">
<div id="ipa-text">

<br/>
</div>
</div>
</form>

<br/><br/>
<?PHP echo $footer; ?>
</div>
</body>
</html>