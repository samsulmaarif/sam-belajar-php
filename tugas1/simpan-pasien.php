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
require("./connectdb.php");

	$link=mysql_connect($dbhost, $dbuser, $dbpassword);
	if(!$link) 
	{
		die(mysql_error()); 
	}
	$pildb=mysql_select_db($dtbase);
	if(!$pildb) 
	{
		die(mysql_error()); 
	}
	$sql = "INSERT INTO tugas1.pasien SET
		fname='$_REQUEST[fname]',
		lname='$_REQUEST[lname]',
		jkelamin='$_REQUEST[jKelamin]',
		gdarah='$_REQUEST[gDarah]',
		tmplahir='$_REQUEST[tmpLahir]',
		tgllahir='$_REQUEST[tglLahir]',
		alamat='$_REQUEST[alamat]',
		diagnosa='$_REQUEST[diagnosa]',
		catatan='$_REQUEST[catatan]';
		";
	mysql_query($sql, $link)
		or die ("SQL Error: ".mysql_error());
	//printf($sql);
	mysql_close();
	printf("<p align='center'><strong>Data Pasien Berhasil Disimpan</strong></p>");
	printf("<meta http-equiv='refresh' content='2;url=input.php'>");

?>
