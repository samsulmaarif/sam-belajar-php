<?php
/*
 * nav.php
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
require("header.php");
?>
<html>
<head>
<!-- <link href="../assets/css/docs.css" rel="stylesheet"> -->
</head>

<body>
    <!-- Docs nav
    ================================================== -->
      <div class="span3-3">
        <ul class="nav nav-tabs nav-stacked">
          <li><a href="daftar.php"><i class="icon-chevron-right"></i> Daftar</a></li>
          <li><a href="input.php"><i class="icon-chevron-right"></i> Input Data</a></li>
          <li><a href="cari.php"><i class="icon-chevron-right"></i> Cari</a></li>
        </ul>
        <div class="alert alert-success">
			<?php echo "<p><strong>Qoutes :</strong></p>"; ?>
			<?php $_GET['type'] = 0; include("sites/rantex.php"); ?>
		</div>
		<div>
			<p align="center"><?php echo '<a href="ymsgr:sendIM?samsul.ma_arif">
			<img src="http://opi.yahoo.com/online?u=samsul.ma_arif&m=g&t=2" border="0" />
			</a>'; ?></p>
		</div>
      </div>
</body>
</html>
