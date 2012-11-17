<?php
/*
 * form_cari.php
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
include './header.php';
include './connectdb.php';
?>

<div class="container">
	<div class="row">		
		<div class="span3-3">
			<?php include("nav.php"); ?>
		</div>

	<div class="span8">

<div class="span8 well">
	  <h1>Cari Data Pasien</h1>
      <hr>
<form class="form-search" action="?query" method="post">
  <div class="input-append">
    <input type="text" class="span2 search-query">
    <button type="submit" class="btn">Search</button>
  </div>
  <span class="help-block">&#42; <strong>Hint :</strong> Cari pasien berdasarkan nama atau alamat.</span>
</form>
</div>
</div> <!-- span4 -->

</div>
    </div> <!-- /container -->
<?php
if(isset($_REQUEST[query]))
	echo "<h1>Hasil Pencarian</h1>";
?>
