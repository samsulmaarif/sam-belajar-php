<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, Belajar PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Belajar PHP</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container">

<?php
$user = "test";
$pass = "password";
$host = "localhost";
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db("test");
$pemrograman = $_POST[pemrograman];
if($pemrograman=="php")
{
	echo "<h3>Terima Kasih</h3><br>Bahasa pemrograman yang Anda pilih adalah PHP<br>";
	$queryphp = 'select polling.php from polling';
	$hasilphp = mysql_query($queryphp);
	while($row=mysql_fetch_row($hasilphp))
	{
		$nilaiphp = $row[0];
	}
	$nilaiphp = $nilaiphp+1;
	$insertphp = 'update polling set php='.$nilaiphp;
	mysql_query($insertphp);
}
if($pemrograman=="java")
{
	echo "<h3>Terima Kasih</h3><br>Bahasa pemrograman yang Anda pilih adalah JAVA<br>";
	$queryjava = 'select polling.java from polling';
	$hasiljava = mysql_query($queryjava);
	while($row=mysql_fetch_row($hasiljava))
	{
		$nilaijava = $row[0];
	}
	$nilaijava = $nilaijava+1;
	$insertjava = 'update polling set java='.$nilaijava;
	mysql_query($insertjava);
}
if($pemrograman=="vbnet")
{
	echo "<h3>Terima Kasih</h3><br>Bahasa pemrograman yang Anda pilih adalah VB.Net<br>";
	$queryvbnet = 'select polling.vbnet from polling';
	$hasilvbnet = mysql_query($queryvbnet);
	while($row=mysql_fetch_row($hasilvbnet))
	{
		$nilaivbnet = $row[0];
	}
	$nilaivbnet = $nilaivbnet+1;
	$insertvbnet = 'update polling set vbnet='.$nilaivbnet;
	mysql_query($insertvbnet);
}
if($pemrograman=="perl")
{
	echo "<h3>Terima Kasih</h3><br>Bahasa pemrograman yang Anda pilih adalah Perl<br>";
	$queryperl = 'select polling.perl from polling';
	$hasilperl = mysql_query($queryperl);
	while($row=mysql_fetch_row($hasilperl))
	{
		$nilaiperl = $row[0];
	}
	$nilaiperl = $nilaiperl+1;
	$insertperl = 'update polling set perl='.$nilaiperl;
	mysql_query($insertperl);
}
if($pemrograman=="c")
{
	echo "<h3>Terima Kasih</h3><br>Bahasa pemrograman yang Anda pilih adalah C#<br>";
	$queryc = 'select polling.c from polling';
	$hasilc = mysql_query($queryc);
	while($row=mysql_fetch_row($hasilc))
	{
		$nilaic = $row[0];
	}
	$nilaic = $nilaic+1;
	$insertc = 'update polling set c='.$nilaic;
	mysql_query($insertc);
}
mysql_close($koneksi);
?>
<br><br>
<div class="controls">
	<a href="polling.php" class="btn btn-primary">Kembali</a>
	<a href="grafikpolling.php" class="btn btn-primary">Lihat Grafik</a>
</div>
</div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
