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
$query="select * from polling";
$hasil = mysql_query($query);
$row=mysql_fetch_row($hasil);
$total = $row[0]+$row[1]+$row[2]+$row[3]+$row[4];
$php = ($row[0]/$total)*100;
$java = ($row[1]/$total)*100;
$vb = ($row[2]/$total)*100;
$perl = ($row[3]/$total)*100;
$c = ($row[4]/$total)*100;
?>

<h1>Hasil Polling</h1>
<h3>Bahasa pemrograman yang paling Anda sukai</h3>
<table class="table table-striped" width="400" border="0">
<tr>
	<td width="64" height="34">PHP</td>
	<td width="229"><img src="polling/php.svg" width="<?php echo $row[0]?>" height="20" /><?php echo " ".$row[0]?></td>
	<td width="85"><?php echo $php."%";?></td>
</tr>
<tr>
	<td width="64" height="34">JAVA</td>
	<td width="229"><img src="polling/java.svg" width="<?php echo $row[1]?>" height="20" /><?php echo " ".$row[1]?></td>
	<td width="85"><?php echo $java."%";?></td>
</tr>
<tr>
	<td width="64" height="34">VB.Net</td>
	<td width="229"><img src="polling/vbnet.svg" width="<?php echo $row[2]?>" height="20" /><?php echo " ".$row[2]?></td>
	<td width="85"><?php echo $vb."%";?></td>
</tr>
<tr>
	<td width="64" height="34">Perl</td>
	<td width="229"><img src="polling/perl.svg" width="<?php echo $row[3]?>" height="20" /><?php echo " ".$row[3]?></td>
	<td width="85"><?php echo $perl."%";?></td>
</tr>
<tr>
	<td width="64" height="34">C#</td>
	<td width="229"><img src="polling/c.svg" width="<?php echo $row[4]?>" height="20" /><?php echo " ".$row[4]?></td>
	<td width="85"><?php echo $c."%";?></td>
</tr>
<tr>
	<td><strong>Total</strong></td>
	<td><?php echo $total;?></td>
	<td></td>
</tr>
</table>

<p><a href="polling.php" class="btn btn-primary">Kembali</a></p>

<?php
mysql_close($koneksi);
?>

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
