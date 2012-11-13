<?php
/*
 * _daftar.php
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
include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="span3">
			<?php include("nav.php"); ?>
		</div>
		<div class="span5">
<h2>Daftar Baru</h2>
<p>Sudah terdaftar? <a href="form_login.php">Login di sini</a>.</p>
<hr>
<div class="well">
<form class="form-horizontal" action="simpan.php" method="post">
  <div class="control-group">
    <label class="control-label" for="username">Nama</label>
    <div class="controls">
      <input class="span3" type="text" name="username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input class="span3" type="password" name="password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="cocokkanpassword">Ulangi Password</label>
    <div class="controls">
      <input class="span3" type="password" name="cocokkanpassword">
    </div>
  </div>  
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    </div>
  </div>
</form>
</div> <!-- well -->
		</div> <!-- span4 -->
	</div> <!-- row -->
</div> <!-- /container -->
<?php include 'footer.php'; ?>
