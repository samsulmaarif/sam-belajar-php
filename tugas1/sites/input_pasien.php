<?php
/*
 * static.php
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
include '../header.php';
include '../connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="../tcal/tcal.css" />
	<script type="text/javascript" src="../tcal/tcal.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container">

      <h1>Input Data Pasien</h1>
      <hr>
<div class="row">
<div class="span4">
<form class="form-horizontal" action="../_simpan-pasien.php" method="post">
  <div class="control-group">
    <label class="control-label" for="fname">Nama Depan :</label>
    <div class="controls">
      <input class="span3" type="text" name="fname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="lname">Nama Belakang :</label>
    <div class="controls">
      <input class="span3" type="text" name="lname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="text2">Jenis Kelamin :</label>
    <div class="controls">
      <select class="span2" name="jKelamin">
		<option>Laki-Laki</option>
		<option>Perempuan</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="text2">Gol. Darah :</label>
    <div class="controls">
      <select class="span1" name="gDarah">
		<option>A</option>
		<option>B</option>
		<option>AB</option>
		<option>O</option>
      </select>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="tmpLahir">Tempat lahir :</label>
    <div class="controls">
      <input class="span3" type="text" name="tmpLahir">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="tglLahir">Tanggal Lahir :</label>
    <div class="controls">
      <input class="span2 tcal" type="text" name="tglLahir">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="alamat">Alamat :</label>
    <div class="controls">
      <textarea class="span3" rows="3" name="alamat"></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="diagnosa">Diagnosa :</label>
    <div class="controls">
      <input class="span3" type="text" name="diagnosa">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="catatan">Catatan :</label>
    <div class="controls">
      <textarea class="span3" rows="3" name="catatan"></textarea>
    </div>
  </div>          
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    </div>
  </div>
</form>
</div>

</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php include '../footer.php'; ?>
