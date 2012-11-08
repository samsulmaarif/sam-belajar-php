<?php
/*
 * proses_login.php
 * 
 * Copyright 2012 Samsul Maarif <samsul@studio>
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
include "blank.php";
?>
<?php
$user = $_POST['username'];
$password = md5 ($_POST['password']);
if($user == "")
{
	header("location:login.php");
}
elseif($password == md5 (""))
{
	header("location:login.php");
}
else
{
	$koneksi = mysql_connect("localhost","test","password");
	mysql_select_db("test");
	$query = 'select * from user where username="'.$user.'"';
	$hasil = mysql_query($query);
	$row=mysql_fetch_array($hasil);
	$row[0];
	$pengguna=$row[0];
	if($row[0]=="")
	{
		echo "Username tidak ada... <br>";
		echo '<a href="input_user.php" class="btn btn-primary">Pendaftaran User</a>';
	}
	else
	{
		$query = 'select * from user where password="'.$password.'"';
		$hasil = mysql_query($query);
		$row=mysql_fetch_array($hasil);
		$row[0];
		if($row[0]=="")
		{
			echo "Password masih salah...";
			echo '<a href="login.php" class=btn btn-primary">Login lagi</a>';
		}
		else
		{
			session_start();
			$_SESSION["user"]=$pengguna;
			header("location:berhasil_login.php");
		}
	}
	mysql_close($koneksi);
}
?>
