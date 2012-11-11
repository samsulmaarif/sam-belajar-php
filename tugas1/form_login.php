<?php
/*
 * form_login.php
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
	<div class="span8">
<h2>Form Login User</h2>
<br>
<form class="form-horizontal" action="login.php" method="post">
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
    <div class="controls">
      <button type="submit" class="btn btn-primary">Login</button>
      <a href="daftar.php" class="btn btn-primary">Daftar Baru</a>
    </div>
  </div>
</form>
</div>
</div> <!-- row -->
</div> <!-- container -->
<?php include 'footer.php'; ?>
