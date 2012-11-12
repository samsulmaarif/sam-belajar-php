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
require('connectdb.php');
?>
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
if($fname=="") || ($lname=="") || ($tmpLahir=="") || ($alamat=="") ($diagnosa=="") 
{ 
	echo "Lengkapi dulu data pasiennya.... "; 
}
else {
	$link=mysql_connect($dbhost, $dbuser, $dbpassword);
	if(!$link) {
		die('Tidak dapat tersambung ke database' . mysql_error()); }
	mysql_select_db($dtbase, $link)
		or die('Tidak dapat membuka database' . mysql_error());
	$sql = "INSERT INTO pasien(id, fname, lname, jKelamin, gDarah, tmpLahir, tglLahir, alamat, diagnosa, catatan) VALUES(NULL,`".$fname."`,`".$lname."`,`".$jKelamin."`,`".$gDarah."`,`".$tmpLahir."`,`".$tglLahir."`,`".$alamat."`,`".$diagnosa."`,`".$catatan."`);";
	mysql_query($sql);
	mysql_close();
	echo "Data Pasien Berhasil Disimpan";
	include 'index.php';
}
?>
