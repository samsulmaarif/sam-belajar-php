<?php
/*
 * _simpan.php
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
require 'connectdb.php';
?>
<div class="container">
<p>
<?php
$username = $_POST['username'];
$password = md5 ($_POST['password']);
$cocokkanpassword = md5 ($_POST['cocokkanpassword']);
if($username==null)
{
	include "daftar.php";
	echo "Nama masih kosong<br>";
}
elseif($password==null)
{
	include "daftar.php";
	echo "Password masih kosong<br>";
}
elseif($password != $cocokkanpassword)
{
	include "daftar.php";
	echo "Password yang Anda masukkan tidak sama<br>";
}
else
{
	$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
	mysql_select_db($dtbase);
	$query = "insert into user(username, password) values('".$username."','".$password."')";
	mysql_query($query);
	mysql_close($koneksi);
	echo "<h2>DATA BERHASIL DISIMPAN</h2>";
	include "login.php";
}
?>
</p>
</div>
