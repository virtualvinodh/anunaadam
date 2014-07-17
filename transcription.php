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
<meta
http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aaravam : Tamil-IPA converter</title>

<?PHP echo $jscss; ?>

</head> <body>

<?PHP echo $header; ?>

<?PHP echo $leftmenu; ?>

<div class="container-cont"> 

<h1>Tamil Transcription</h1> 
<p>Tamil grammar treatises usually tend to reflect historical phonology rather than the
contemporary phonology of the language. The earliest parts of a widely quoted grammer 
treatise <i>Tolkāppiyam</i> is usually dated approximately 2000 years ago. School textbooks
(and other books) 
on Tamil usually following the 13th century grammar treatise "Naṉṉūl". However, Tamil 
grammar treatises have not differed much in their treatment of phonemes with respect to
Tolkāppiyam.</p>

<p>Because of the stagnation of several centuries, most textbooks actually 
define the phonology of the medieval language rather than the modern language. 
This textbook version of Tamil phonology does not accurately represent the modern 
Phonology of the language. We'll attempt to describe how contemporary phonology of the
language differs from the formal prescriptive grammar treatises.</p>

<h2>Modern Tamil Phonology </h2> 
<p>Let's begin with vowels. Vowels can be either short (1 mora) or long (2 morae). 
The long and short distinctions in Tamil also include change in quality of 
the vowel as well the quantity (except &laquo;o&raquo;). For example, <i>&laquo;kaṇ<&raquo;</i> is /kəɳ/ but 
<i>&laquo;kāṇ<&raquo;</i> is /kɑːɳ/ not /kəːɳ/. Similarly, <i>&laquo;cey&raquo;</i> is
/sɛj/ but <i>&laquo;cēy&raquo;</i> is /seːj/ not /sɛːj/. Traditional treatises generally
do not note the change in quality of the vowels. 
</p>

<p>Now, Tamil grammars also additionally recognize several special class of vowels. These are 
extra-long vowels (more than 2 morae) and extra-short vowels (less than 1 mora). 
The extra-long vowels are denoted by an extra vowel grapheme added to the sequence (in order to 
account for the added mora). But due to this orthographic convention,
the extra-long vowels have now been reduced to spelling
pronunciation where the sequence is pronounced with a vowel hiatus. While <i>&laquo;perātavar&raquo;</i> should be pronounced as /pɛɾɑːˑd̪əʋər/, 
it is often pronounced as
/pɛɾɑː.əd̪əʋər/.</p>

<p> As for extra short vowels, grammar books recognize extra-short &laquo;i&raquo; & 
extra-short &laquo;u&raquo;. Extra-short &laquo;i&raquo; does not exist any more. And extra-short
&laquo;u&raquo; is supposed to appear only with plosives and in specific positions of a words.
But at present nearly every non-final &laquo;u&raquo; (and even intervocalic u in some positions) 
is reduced. Again, do note that though it is considered as a "reduction" grammatically, 
only the quality /
of the vowel changes phonetically. The length is retained. For example, <i>&laquo;pāṭṭu&raquo;</i>
is /pɑːʈʈʉ/, <i>&laquo;kallu&raquo;</i> is /kəllʉ/ and 
<i>&laquo;taḻuviya&raquo;</i> is /t̪əɻʉʋɪjə/.</p>

<p>Now, let us move on to the consonantal part.</p>

<p>Historically (at least during the time of Tolkāppiyam), &laquo;ṟ&raquo; was an alveolar stop. 
But it is  (still!) traditionally classified as a stop along with &laquo;k&raquo;, &laquo;c&raquo;,
&laquo;ṭ&raquo;, &laquo;t&raquo and &laquo;p&raquo.
Since a few centuries earlier it has merged with &laquo;ɾ&raquo; in the intervocalic positions.
The historical alveolar stop pronunciation is partially retained only in clusters 
&laquo;ṟṟ&raquo; and &laquo;ṉṟ&raquo as /t̺t̺ʳ/ and /nd̺ʳ/ respectively.
Similarly, &laquo;n&raquo; & &laquo;ṉ&raquo; have merged and are no longer distinguished.
However, these historically phonemes have been retained in the orthography.
Thus, Word pairs that involve differentiation of &laquo;ṟ&raquo;/&laquo;r&raquo; and 
&laquo;n&raquo;/&laquo;ṉ&raquo; are purely orthographical and are homophones. Both <i>&laquo;maṟam&raquo</i> & 
<i>&laquo;maram&raquo</i> are pronounced as /maṟam/. </p>

<p>Also &laquo;c&raquo; (traditionally listed as a plosive) is not longer an affricate /tʃ/ 
in intervocalic positions where it is
realized as a dental fricative /s/. The affricate is sometimes retained in the
word-initial position (in free variation with /s/), during gemination and in
vowel-less situations.</p>

<p> Originally, &laquo;ḵ&raquo; was probably a /x/. But the sound I was taught at school 
fell something between /g/ and /ɣ/. It appears that in several regions, the /x/ sound is still prevalent.
So, I have retained /x/ as the pronunciation for &laquo;ḵ&raquo;.</p>

<p>Lately, the difference between &laquo;ṉ&raquo; /n/ - &laquo;ṇ&raquo; /ɳ/
& &laquo;l&raquo; /l/ -  &laquo;ḷ&raquo; /ɭ/ is also being lost
with the latter phonemes getting merged with the former. This is quite evident
by the informal names (two looped n vs three looped n and small l vs big l) by whichthey are referred to be distinguished when "spelling out"
words. In
many regions,  &laquo;ḻ&raquo; /ɻ/ is getting merged with &laquo;ḷ&raquo; /ɭ/. This has resulted in
hypercorrecting &laquo;ḷ&raquo; with &laquo;ḻ&raquo; and vice-versa in written Tamil.</p>

<p> But as such, the transcription given in the converter is fairly conservative.
It does differentate between all the sounds described in the previous paragraph. </p>

<p>Tamil originally lacked the fricatives /s/ (at word-final position), /ʂ/ & /ɦ/. 
But these have now been adapted to the language and are now a part of the language's
modern phonology. Similarly
/dʒ/ also gained its own grapheme at all non-post-nasal positions (because &laquo;l&raquo; was already
multi-valent by representing /s/ (inter-vocalic), /dʒ/ (post-nasal) and /tʃ/ (gemination/post-consonantal) ).
Similarly, &laquo;śrī&raquo; has also been borrowed and 
adapted to the language. These are few linguistic puritanists & fanatists who detest and shun
these "foreign" characters, but they are non-mainstream fringe elements who don't blatantly disregard the
modern phonology of the language.</p>

<p>Apart from the phones of the literary Tamil, spoken Tamil also has nasalized vowels. 
In written colloquial language, the nasalization is orthographically represented using a nasal consonant.
This is because words with word-final consonants usually end up nasalizing the preceding
vowel. Consider the following sentence:</p>

<p>அவன் வந்தான் <br/>
<big>əʋən ʋənd̪ɑːn</big> (<i>Literary Tamil</i>)<br/>
<big>əʋə̃ ʋənd̪ɑ̃ː </big> (<i>Spoken Tamil</i>)<br/></p>

<h2>Narrow Transcription</h2>
<p>It is to be noted that the narrow transcription of the tool is based on
the recitation of classical Tamil verses by Punal K Murugaiyan in [1]. 
It is not based on prose. It identifies as much as
100 different phones in the language. Hence, the transcription derived from his
work is quite detailed and meticulous.

<h2>Broad Transcription</h2>
<p>I have tried to cut down the unnecessary details a bit and have retain only
the basic features that are absolutely necessary for the language. </p>

<p>The narrow transcription uses several fricatives such as /ð/, /β/, /x/ and /ɣ/. 
I am not quite sure I agree with the identification of all these phones. I myself find it hard 
producing /ð/, /ɣ/ and other fricatives when learning other languages. But even Clayton (1934)
recognizes some fricatives in the language. To simplify things, I have replaced them
with the equivalent voiced plosives.
Also, the schwa /ə/ is analyzed as being allophonic with a back vowel /ʌ/. 
But I have fused them to /ə/.</p>

<p>To be fair, the narrow transcription is based on a prosodical recitation which may have
affected the quality of vowels and consonants. I have only retained the obvious 
features of modern Tamil 
such palatalization of initial-vowel &laquo;e&raquo;, labialization of initial-vowel 
&laquo;u&raquo;, vocalization of inter-vocalic plosives and
several other features discussed earlier and hence reducing the amount of
phones represented.</p>

<h2>References</h2>
<p>1. Murugaiyan, K (2010). Paṉṉiru Tirumuṟai Olipeyarppu. Chennai, India: Kāntaḷakam Publishers</p>
<p>2. Keane, Elinor (2004). "Tamil". Journal of the International Phonetic Association 34 (1): 111–116.</p>
<p>3. Clayton, A.C (1934). A progressive grammar of common Tamil. India: Christian literary society</p>
</div> <?PHP echo $footer; ?> </body> </html>