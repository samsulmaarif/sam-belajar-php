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

?>
    <div class="container">
		<div class="row">
			<div class="span3">
				<?php include("nav.php"); ?>
			</div>
			<div class="span9">
				<div class="hero-unit">
      <h1>Selamat Datang <?php echo "".$_SESSION['SESS_USER_NAME'].""; ?> !</h1>
      <p class="lead">Anda berada di tempat yang tepat.</p>
		<p><a href="http://id.wikipedia.org/wiki/Sirih">Sirih</a> merupakan 
		tanaman asli Indonesia yang tumbuh merambat atau bersandar pada batang 
		pohon lain. Sebagai budaya daun dan buahnya biasa dimakan dengan cara 
		mengunyah bersama gambir, pinang dan kapur. Namun mengunyah sirih telah 
		dikaitkan dengan penyakit kanker mulut dan pembentukan squamous cell 
		carcinoma yang bersifat malignan. </p>

				</div> <!-- hero-unit -->
			</div> <!-- span9 -->
		</div> <!-- row -->
    </div> <!-- /container -->
