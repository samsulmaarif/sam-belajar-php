<?php
/*
 * simpan-pasien.php
 * 
 * Copyright 2012 Samsul Maarif <samsul@samsul.web.id>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
require("connectdb.php");
/*?>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jKelamin = $_POST['jKelamin'];
$gDarah = $_POST['gDarah'];
$tmpLahir = $_POST['tmpLahir'];
$tglLahir = $_POST['tglLahir'];
$alamat = $_POST['alamat'];
$diagnosa = $_POST['diagnosa'];
$catatan = $_POST['catatan'];
*/
if($_POST['fname'] == "") 
{ 
	echo "Nama depan kosong"; 
}
elseif($_POST['lname'] == "") 
{ 
	echo "Nama Belakang kosong"; 
}
elseif($_POST['tmpLahir'] == "") 
{ 
	echo "Tempat lahir kosong"; 
}
elseif($_POST['alamat'] == "") 
{ 
	echo "alamat kosong"; 
} 
elseif($_POST['diagnosa'] == "") 
{ 
	echo "penyakitnya apa om?"; 
}
else 
{
	$link=mysql_connect($dbhost, $dbuser, $dbpassword);
	if(!$link) 
	{
		die(mysql_error()); 
	}
	$pildb=mysql_select_db($dtbase, $link);
	if(!$pildb) 
	{
		die(mysql_error()); 
	}
	$sql = "INSERT INTO '".$dtbase."'pasien(fname,lname,jKelamin,gDarah,tmpLahir,tglLahir,alamat,diagnosa,catatan) VALUES(`".$_POST[fname]."`,`".$_POST[lname]."`,`".$_POST[jKelamin]."`,`".$_POST[gDarah]."`,`".$_POST[tmpLahir]."`,`".$_POST[tglLahir]."`,`".$_POST[alamat]."`,`".$_POST[diagnosa]."`,`".$_POST[catatan]."`)";
	mysql_query($sql);
	mysql_close();
	echo "Data Pasien Berhasil Disimpan";
	include("input.php");
}

/*
	echo "$_POST[fname]<br>";
	echo "$_POST[lname]<br>";
	echo "$_POST[jKelamin]<br>";
	echo "$_POST[gDarah]<br>";
	echo "$_POST[tmpLahir]<br>";
	echo "$_POST[tglLahir]<br>";
	echo "$_POST[alamat]<br>";
	echo "$_POST[diagnosa]<br>";
	echo "$_POST[catatan]<br>";
*/
?>
