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


/* Convert Tamil unicode to intermediate romanized encoding */

function tam2lat($text)
{

$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_E',
'ஏ' => '_e',
'ஐ' => '_Y',
'ஒ' => '_O',
'ஓ' => '_o',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'X',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'E',
'ே' => 'e',
'ை' => 'Y',
'ொ' => 'O',
'ோ' => 'o',
'ௌ' => 'W',
'்' => 'F',
'ஃ' => 'K'
);

foreach($tameng as $key=>$value)
{
	$text=str_replace($key,$value,$text); 
}

$text=preg_replace('/([kGcJTNtnpmyrlvZLXVjSsh])F/','_$1',$text);

$text=preg_replace('/(?<!_)([kGcJTNtnpmyrlvZLXVjSsh])(?![aAiIuUeEoOYW])/','$1a',$text);

$text = preg_replace('/(_[kGcJTNtnpmyrlvZLXVjSsh])(_[aAiIuUeEoOYW])/','$1_$2',$text);

$text = str_replace(array("_","Y","W"),array("","ai","au"),$text);


return($text);

}


?>