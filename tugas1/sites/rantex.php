<?php
/*******************************************************************************
*  Title: Random text script (RanTex)
*  Version: 1.0 @ January 4, 2009
*  Author: Klemen Stirn
*  Website: http://www.phpjunkyard.com
********************************************************************************
*  COPYRIGHT NOTICE
*  Copyright 2009 Klemen Stirn. All Rights Reserved.
*
*  This script may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.
*
*  If you are using this script you are required to place a link
*  to PHPJunkyard on your website. You will find some link suggestions here:
*  http://www.phpjunkyard.com/link2us.php
*
*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.
*
*  Obtain permission before redistributing this software over the Internet
*  or in any other medium. In all cases copyright and header must remain
*  intact. This Copyright is in full effect in any country that has
*  International Trade Agreements with the United States of America or
*  with the European Union.
*******************************************************************************/


/* File, where the random text/quotes are stored one per line */
//$settings['text_from_file'] = '';

/*
   If you prefer you can list quotes that RanTex will choose from here.
   In this case set above variable to $settings['text_from_file'] = '';
*/
$settings['quotes'] = array(
'<p>Open your mind, use <a href="http://opensource.org/">Open Source</a>!</p>
<p align="right">--<a href="https://www.facebook.com/groups/linuxsidareja/">Linux Sidareja</a></p>',
'"Manakala sesuatu bangsa telah sanggup mempertahankan negerinya dengan darahnya sendiri, dengan dagingnya sendiri, pada saat itu bangsa itu telah masak untuk kemerdekaan. Kalau bangsa kita, Indonesia, walaupun dengan bambu runcing, Saudara-saudara, semua siap sedia mati mempertahankan tanah air kita Indonesia, pada saat itu bangsa Indonesia adalah siap sedia, masak untuk merdeka."<br>
––<a href="http://id.wikiquote.org/wiki/Soekarno">Soekarno</a>, Pidato di BPUPKI, 1 Juni 1945',
'Komputer membuat semua masalah menjadi mudah, tetapi kebanyakan masalah yang ia buat menjadi mudah adalah masalah yang tidak perlu diselesaikan.<p align="right">--<a href="http://id.wikipedia.org/wiki/Andy_Rooney">Andy Rooney</a></p>',
'<p>I\'m doing a (free) operating system (just a hobby, won\'t be big and professional like gnu) for 386(486) AT clones.</p>
<p align="right"><a href="http://en.wikiquote.org/wiki/Linus_Torvalds">Torvalds, Linus</a> (1991-08-25).</p>',
'<p>Setiap perjuangan selalu melahirkan sejumlah pengkhianat dan para penjilat.<br>
Jangan kau gusar, Hadi.</p>
<p align="right">--<a href="http://id.wikipedia.org/wiki/Taufiq_Ismail">Taufiq Ismail</a></p>',
'<p>Saya mempunyai data yang membandingkan harga sekilo pesawat terbang dengan harga sekilo beras. Satu kilo pesawat harganya 30.000 dolar AS dan satu kilo beras harganya 7 sen. Jika Anda hendak membayar satu kilo barang berteknologi tinggi dengan satu kilo beras, rasanya kita tidak akan sanggup memenuhi permintaann tersebut.</p>
<p align="right">--<a href="http://id.wikiquote.org/wiki/Baharuddin_Jusuf_Habibie">B.J. Habibie</a></p>',
'<p>The government will have to spend money on training programmes for computer users to learn the new software. The budget may be the same as buying proprietary software, but it\'s a different kind of investment</p>
<p align="right">--<a href="http://id.wikiquote.org/wiki/Budi_Rahardjo">Budi Raharjo</a></p>',
);

/*******************************************************************************
 * 
 * Sebagian besar Qoutes diambil dari http://id.wikiquote.org/
 * 
 ******************************************************************************/

/*
   How to display the text?
   0 = raw mode: print the text as it is, when using RanTex as an include
   1 = Javascript mode: when using Javascript to display the quote
*/
$settings['display_type'] = 1;

/* Allow on-the-fly settings override? 0 = NO, 1 = YES */
$settings['allow_otf'] = 1;

/*******************************************************************************
*  DO NOT EDIT BELOW...
*
*  ...or at least make a backup before you do!
*******************************************************************************/

/* Override type? */
if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

/* Get a list of all text options */
if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}

/* If we have any text choose a random one, otherwise show 'No text to choose from' */
if (count($settings['quotes']))
{
	$txt = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txr = 'No text to choose from';
}

/* Output the image according to the selected type */
if ($type)
{
    /* New lines will break Javascript, remove any and replace them with <br /> */
    $txt = nl2br(trim($txt));
    $txt = str_replace(array("\n","\r"),'',$txt);
	echo 'document.write(\''.addslashes($txt).'\')';
}
else
{
	echo $txt;
}
?>
