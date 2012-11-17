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
	  <h1>Input Data Pasien</h1>
      <hr>
<form class="form-horizontal" action="simpan-pasien.php" method="post">
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
    <label class="control-label" for="jKelamin">Jenis Kelamin :</label>
    <div class="controls">
      <select class="span2" name="jKelamin">
		<option>Laki-Laki</option>
		<option>Perempuan</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="gDarah">Gol. Darah :</label>
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
	  <script src="../assets/js/bootstrap-typeahead.js"></script>
      <input class="span3" type="text" name="tmpLahir" data-provide="typeahead" data-items="5" data-source="['Tangerang', 'Serang', 'Lebak', 'Pandeglang', 'Cilegon', 'Tangerang Selatan', 'Bandung', 'Bandung Barat', 'Bekasi', 'Bogor', 'Ciamis', 'Cianjur', 'Cirebon', 'Garut', 'Indramayu', 'Karawang', 'Kuningan', 'Majalengka', 'Purwakarta', 'Subang', 'Sukabumi', 'Sumedang', 'Tasikmalaya', 'Banjar', 'Cimahi', 'Depok', 'Pangandaran', 'Jakarta Barat', 'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 'Jakarta Utara', 'Banjarnegara', 'Banyumas', 'Batang', 'Blora', 'Boyolali', 'Brebes', 'Cilacap', 'Demak', 'Grobogan', 'Jepara', 'Karanganyar', 'Kebumen', 'Kendal', 'Klaten', 'Kudus', 'Magelang', 'Pati', 'Pekalongan', 'Pemalang', 'Purbalingga', 'Purworejo', 'Rembang', 'Semarang', 'Sragen', 'Sukoharjo', 'Tegal', 'Temanggung', 'Wonogiri', 'Wonosobo', 'Magelang', 'Pekalongan', 'Salatiga', 'Surakarta', 'D.I. Yogyakarta']">
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
</div> <!-- span4 -->

</div>
    </div> <!-- /container -->
