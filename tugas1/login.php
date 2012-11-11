<?php
/*
 * login.php
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
include("header.php");
?>
<div class="container">
<?php
$user = $_POST['username'];
$password = md5 ($_POST['password']);
if($user == null)
{
	header("location:form_login.php");
}
elseif($password == md5 (null))
{
	header("location:form_login.php");
}
else
{
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dtbase, $koneksi) 
		or die(mysql_error());
	$query = "SELECT * FROM user WHERE username='$user'";
	$hasil = mysql_query($query);
	$row=mysql_fetch_array($hasil) 
		or die(mysql_error());
	$row[0];
	$pengguna=$row[0];
	if($row[0]==null)
	{
		echo "Username tidak ada... <br>";
		include 'form_login.php';
	}
	else
	{
		$query = "select * from user where password=' ".$password." '";
		$hasil = mysql_query($query);
		$row=mysql_fetch_array($hasil) or die(mysql_error());
		$row[0];
		if($row[0]==null)
		{
			echo "Password masih salah...";
			include 'form_login.php';
		}
		else
		{
			session_start();
			$_SESSION["user"]=$pengguna;
			header("location:index.php");
		}
	}
	mysql_close($koneksi);
}
?>
</div> <!-- container -->
