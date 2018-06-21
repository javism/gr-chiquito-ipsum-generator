<?php
/*
Plugin Name: GR Chiquito Ipsum Generator
Description: Generates one or more randomly selected paragraphs of Chiquito Ipsum (http://www.chiquitoipsum.com/) text from shortcode. Use shortcode [lorem] for one paragraph. Or add para= X to generate X number of paragraphs. Example [lorem para=3] for 3 paragraphs.
Version: 2.1
Author: Javier Sanchez based on the work of John Wierenga (http://johnwierenga.com)
Author URI: http://javism.github.io

/*  
    Copyright 2014 John Wierenga (email : john@grandrapidsweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/        
function gr_sc_lorem_function($gr_sc_lorem_gratts) {
   extract(shortcode_atts(array(
      'para' => 1,
   ), $gr_sc_lorem_gratts));
   $gr_sc_lorem_gr_sc_lorem_loop = 1;
   $gr_sc_lorem_imsum=null;
while ($gr_sc_lorem_gr_sc_lorem_loop <= $para) {
$gr_sc_lorem_num =rand ( 1 , 7 );
if ($gr_sc_lorem_num == 1)
{
$gr_sc_lorem_imsum .= "<p>Lorem fistrum pecador llevame al sircoo a peich amatomaa apetecan a peich. Qué dise usteer papaar papaar ahorarr tiene musho peligro torpedo pupita pecador apetecan qué dise usteer. Apetecan al ataquerl pecador hasta luego Lucas. A peich apetecan apetecan a wan pupita por la gloria de mi madre hasta luego Lucas. Tiene musho peligro ese pedazo de amatomaa llevame al sircoo al ataquerl no puedor ese hombree ese que llega no te digo trigo por no llamarte Rodrigor a gramenawer. Amatomaa te voy a borrar el cerito a peich mamaar.</p>";
}
else if ($gr_sc_lorem_num == 2)
{
$gr_sc_lorem_imsum .= "<p>Sexuarl hasta luego Lucas papaar papaar de la pradera torpedo te voy a borrar el cerito tiene musho peligro a peich hasta luego Lucas. Está la cosa muy malar ese pedazo de te va a hasé pupitaa se calle ustée. A wan ese que llega ese pedazo de ese pedazo de pecador no puedor va usté muy cargadoo la caidita ese que llega apetecan. Se calle ustée ese hombree la caidita caballo blanco caballo negroorl tiene musho peligro torpedo hasta luego Lucas va usté muy cargadoo. A gramenawer qué dise usteer se calle ustée pecador qué dise usteer al ataquerl diodeno condemor torpedo. Quietooor caballo blanco caballo negroorl qué dise usteer quietooor ahorarr qué dise usteer te va a hasé pupitaa. Al ataquerl torpedo condemor por la gloria de mi madre caballo blanco caballo negroorl diodenoo apetecan te voy a borrar el cerito no te digo trigo por no llamarte Rodrigor a peich. Diodenoo al ataquerl no puedor va usté muy cargadoo se calle ustée va usté muy cargadoo amatomaa a gramenawer diodenoo apetecan. .</p>";
}
else if ($gr_sc_lorem_num == 3)
{
$gr_sc_lorem_imsum .= "<p>Ese hombree amatomaa hasta luego Lucas ese hombree pecador a peich. Al ataquerl quietooor llevame al sircoo torpedo caballo blanco caballo negroorl ese pedazo de te va a hasé pupitaa te va a hasé pupitaa amatomaa. Ese pedazo de a gramenawer fistro tiene musho peligro a peich qué dise usteer a peich fistro te voy a borrar el cerito qué dise usteer tiene musho peligro. A gramenawer hasta luego Lucas va usté muy cargadoo a gramenawer pecador la caidita a gramenawer. Caballo blanco caballo negroorl diodenoo no puedor sexuarl te voy a borrar el cerito llevame al sircoo te voy a borrar el cerito. Se calle ustée tiene musho peligro amatomaa pupita te voy a borrar el cerito. Condemor ese que llega ese que llega va usté muy cargadoo la caidita te voy a borrar el cerito va usté muy cargadoo apetecan apetecan papaar papaar. .</p>";
}
else if ($gr_sc_lorem_num == 4)
{
$gr_sc_lorem_imsum .= "<p>Curabitur in enim eu sem tempus imperdiet vitae a nunc. Duis sit amet magna eget nibh tristique lacinia a id lorem. Nam posuere nulla feugiat ipsum scelerisque, feugiat pharetra lectus pellentesque. Donec et hendrerit augue, at egestas mauris. Duis scelerisque ultricies accumsan. Ut semper urna sed nulla pharetra eleifend. Etiam quis eros eget metus viverra tincidunt sit amet eu ante.</p>";
}
else if ($gr_sc_lorem_num == 5)
{
$gr_sc_lorem_imsum .= "<p>Lorem fistrum condemor quietooor benemeritaar duis. Veniam no puedor hasta luego Lucas aliquip a peich. Ut ese pedazo de condemor la caidita ese hombree dolor jarl. Quis veniam tiene musho peligro fistro al ataquerl tiene musho peligro minim. Pupita cillum magna officia officia ad ahorarr. .</p>";
}
else if ($gr_sc_lorem_num == 6)
{
$gr_sc_lorem_imsum .= "<p>Por la gloria de mi madre magna exercitation exercitation sexuarl dolor tempor. Mamaar adipisicing de la pradera aute sit amet magna. Sed sed nisi ese pedazo de ut duis adipisicing sexuarl velit occaecat. Voluptate nisi va usté muy cargadoo eiusmod mamaar nostrud no te digo trigo por no llamarte Rodrigor tempor me cago en tus muelas llevame al sircoo. Tempor torpedo papaar papaar pecador se calle ustée la caidita de la pradera aliquip papaar papaar de la pradera. Diodeno eiusmod sexuarl minim mamaar. La caidita te va a hasé pupitaa tiene musho peligro papaar papaar enim condemor ad amatomaa ut. Veniam al ataquerl a gramenawer consectetur tempor sit amet fistro pupita officia tempor eiusmod. .</p>";
}
else if ($gr_sc_lorem_num == 7)
{
$gr_sc_lorem_imsum .= "<p>Officia jarl enim nisi et ese pedazo de tiene musho peligro a peich irure papaar papaar. Pecador no puedor duis ese pedazo de dolor adipisicing pecador et por la gloria de mi madre. Pecador caballo blanco caballo negroorl incididunt benemeritaar aliqua al ataquerl nisi. De la pradera commodo laboris tempor la caidita. Quis quietooor aliquip ese pedazo de officia sexuarl exercitation irure. .</p>";
}
$gr_sc_lorem_gr_sc_lorem_loop++;
}
  return $gr_sc_lorem_imsum;
}
add_shortcode('lorem', 'gr_sc_lorem_function');
?>
