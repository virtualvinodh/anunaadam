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


require_once "menu.php" ?>
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
<h1>Help</h1>
<p>Tamil is largely a phonemic script. However, it is quite rich in allophones. For example,
unlike most other Indian languages which
phonemically differentiate voiced and un-voiced phones, they are considered allophones
in Tamil and hence not graphemically differentiated. Similarly, even with vowels several 
allophonic variants can be seen. </p>

<p>This tool attempts
 to analyze allphonic variants in a given Tamil input and produce a phonetically transcribed text. 
</p>

<p>It must be noted that this converter only corresponds to the standardized pronunciation of 
Tamil in Tamil Nadu. Sri Lankan Tamil is quite different. For instance &laquo;ṟṟ&raquo; and &laquo;ṉṟ&raquo; are
pronounced differently in that dialect.</p>
<h2>Limitations</h2>
The converter faces the following limitations. They may be overcome in the future. <br/><br/>
The Transliteration of a word in ISO 15919 is enclosed by <i>&laquo;transliteration&raquo;</i> and the approximate transcription in ISO 15919 by <i>/transcription/</i>. 
<ul>
<li>The rules may not across a word boundary in case of a compound word.
<li>Lexical borrowings from other languages as usually nativized in pronunciation such as Sanskrit &laquo;matam&raquo; being pronounced as /madam/.
But like all languages some words tend to retain their original pronunciation (at least partially). 
For instance, <i>பயம் &laquo;payam&raquo; </i> is realized as <i>/bayam/</i>.
The word-inital <i>&laquo;p&raquo;</i> is usually unvoiced but it has retained the voiced pronunciation of the original word /bhaya/ (but with the lost of 
aspiration). 
<li>Traditional grammars restrict &laquo;r&raquo; and  &laquo;l&raquo; 
not to appear in word-initial positions. Some circumvent this by introducing an epenthetic vowel usually an <i>இ &laquo;i&raquo;</i>. 
However,this is mostly orthographic. <i>இராமன் &laquo;irāman&raquo; </i> 
is pronounced /rāman/, totally ignoring the initial epenthetic vowel.
(But few words such as <i>இலங்கை &laquo;ilankai&raquo;</i> have incorporated the epenthetic 
vowel into actual pronunciation just because such lexical borrowings were made several centuries 
earlier)
<li>Word-initial clusters and non-native clusters in other positions usually result in epenthesis. 
Sometimes this is only orthographic as in the previous case. 
The Sanskrit word <i>/drōha/</i> is rendered in Tamil as <i>துரோகம் &laquo;turōkam&raquo;</i> but is realized as /drōgam/.
<li> There are several native tamil words that are deviant. For example,
<i>பல்லி &laquo;balli&raquo;</i> & <i>குதி &laquo;kuti&raquo;</i> are pronounced with word-initial voiced stops as
<i>/balli/</i> & <i>/gudi/</i> contrary to the general rules. 
<!-- fa !-->
</ul>
</ul>
<h2>Font Display</h2>
<p>The following fonts are dynamically loaded from the server to display IPA characters.</p>
<ul>
<li>Andika
<li>Charis SIL
<li>Dejavu Sans
<li>Dejavu Serif
<li>Doulos SIL
<li>Gentium Plus
<li>Lucida Sans Unicode
</ul>
<p>Hence, you should be able to view the IPA text without any problems. 
If you do face problems in display, please install any of the listed fonts locally in your computer</p>
<h3>Other Languages</h3>
Though this program mainly aims at IPA transcription, you may also view the transcribed Tamil
text in several Indian languages. They have been derived from my other tool <i>Aksharamukha</i>.
<h3>Text Ouput</h3>
<p>By default, the convert text is displayed in IPA and the original Tamil text is displayed as a tooltip. However
you may reverse the order or even use ruby texts to display the transcriptions. </p>
<h2>API</h2>
<p>The converter is also available has a REST API servive. 
<p>A POST or GET request must be sent to following URL : http://anunaadam.appspot.com/api with
the following parameters:</p>
<i>text</i>: The Tamil text that needs to be transcribed<br/>
<i>method</i>: 1 for Narrow and 2 for broad<br/>
<h2>Terminal</h2>
<p>You can also invoke this tool from the Terminal. Download the source code from <a href="http://githum.com/virtualvinodh/anunaadam">Github</a>. It has to be then invoked using the PHP CLI.</p>

<p>In OS X Mountain Lion, the in-built PHP doesn't seem to handle UTF-8 properly. You can install PHP 5.4 using Homebrew and then use it as CLI.</p>
<img src="images/terminal.png"/> <br/>
</div>
<?PHP echo $footer; ?>
</body>
</html>