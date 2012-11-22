<?php
/*
 * cari.php
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
include("./header.php");
require("./connectdb.php");
require_once("auth.php");
?>
<div class="container">
	<div class="row">		
		<div class="span3-3">
			<?php include("nav.php"); ?>
		</div>

	<div class="span9">

<div class="span8 well">
	  <h1>Cari Data Pasien</h1>
      <hr>
<form class="form-search" action="?query" method="post">
  <div class="input-append">
    <input type="text" class="span3 search-query" name="ktkunci">
    <input type=hidden name=todo value=search> 
    <input type=hidden name=tp value=any checked>
    <button type="submit" class="btn">Cari</button>
  </div>  
  <span class="help-block">&#42; <strong>Hint :</strong> Cari pasien berdasarkan nama atau alamat.</span>
</form>
<?php
if(isset($_REQUEST[query]))
{
	//printf("<hr><h1 align='left'>Hasil Pencarian</h1>");
	printf("<hr><p>Hasil pencarian untuk \"<strong>".$_POST['ktkunci']."</strong>\"</p>");
	$keyword=$_POST['ktkunci'];
	//$todo=$_POST['todo'];
	//$tp=$_POST['tp'];
	if (!$keyword) //jika katakunci kosong
	{ 
		printf("Masukkan kata kunci!");
	}
	else
	{
			$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
			mysql_select_db($dtbase, $koneksi);	   
			$q = "fname like '%$keyword%' or lname like '%$keyword%' or alamat like '%$keyword%'";
			$query="select * from tugas1.pasien where $q";
			$resultcari= mysql_query($query) or die('
							<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Koplak</strong>, ora bisa ngundang data nang basisdata.
							</div>'.mysql_error());

				$nomor = 0;				
				printf('
				<table class="table table-bordered">
				<tr>
					<td>No</td>
					<td>Nama Depan</td>
					<td>Nama Belakang</td>
					<td>Jenis Kelamin</td>
					<td>Gol. Darah</td>
					<td>Tempat Lahir</td>
					<td>Tgl. Lahir</td>
					<td>Alamat</td>
					<td>Diagnosa</td>
					<td>Catatan</td>
				</tr>
				');

			while($baris=mysql_fetch_array($resultcari))
			{
				$nomor++;
				$ndepan = $baris[1];
				$nbelakang = $baris[2];
				$kelamin = $baris[3];
				$goldarah = $baris[4];
				$tplahir = $baris[5];
				$tglahir = $baris[6];
				$alamate = $baris[7];
				$diagnosae = $baris[8];
				$catatane = $baris[9];
				
				printf("<tr>");
				printf("<td>$nomor</td>\n");
				printf("<td>$ndepan</td>\n");
				printf("<td>$nbelakang</td>\n");
				printf("<td>$kelamin</td>\n");
				printf("<td>$goldarah</td>\n");
				printf("<td>$tplahir</td>\n");
				printf("<td>$tglahir</td>\n");
				printf("<td>$alamate</td>\n");
				printf("<td>$diagnosae</td>\n");
				printf("<td>$catatane</td>\n");
			}
			printf("</tr>");
			printf("</table>");
			mysql_close($koneksi);
	}  //akhir dari 'else'-nya keyword...
}
?>
</div> <!-- well -->
</div> <!-- span8 -->
</div> <!-- row -->
    </div> <!-- /container -->

<?php include("./footer.php"); ?>
