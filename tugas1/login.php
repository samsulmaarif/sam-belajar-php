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
 * Credit file : T. Surya Fajri <kilelme@gmail.com>
 * Thanks for the code. :D
 * 
 */
?>
<div class="container">
<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('./connectdb.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect($dbhost, $dbuser, $dbpassword);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db($dtbase, $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$pasw = clean($_POST['password']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($pasw == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'";

	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			//$_SESSION['SESS_MEMBER_ID'] = $member['id_daftar'];
			$_SESSION['SESS_USER_NAME'] = $member['username'];
			//$_SESSION['SESS_LAST_NAME'] = $member['TxtNamaB'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			//Login failed
			echo "Login Failed!";
			include("login.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>
</div> <!-- container -->
