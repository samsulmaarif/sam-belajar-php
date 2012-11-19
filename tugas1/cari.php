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

	<div class="span8">

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
	printf("<hr><h1 align='left'>Hasil Pencarian</h1>");
	$keyword=$_POST['ktkunci'];
	$todo=$_POST['todo'];
	$tp=$_POST['tp'];
	if (!$keyword) //jika katakunci kosong
	{ 
		printf("Masukkan kata kunci!");
	}
	else
	{
		if(isset($todo) and $todo=="search") //JIKA FORM TERISI
		{
			$keyword=ltrim($keyword);
			$keyword=rtrim($keyword);
		}
		if($tp<>"any")
		{ 
			$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
			mysql_select_db($dtbase, $koneksi);	   
			$q = "fname like '%$keyword%' or or lname like '%$keyword%' or alamat like '%$keyword%'";
			$query="select * from tugas1.pasien where $q";
		}

	}  //akhir dari 'else'-nya keyword...
  
  	//hasil pencarian disini...
	
$resultcari= mysql_query($query) or die('
							<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Koplak</strong>, ora bisa ngundang data nang basisdata.
							</div>');
if (!$numrows)
{echo "";}
else { echo"<p align=justify style='margin-left: 70; margin-right:20'>";
      if ($myrow = mysql_fetch_array($resultcari))
          {
          // display list if there are records to display
          do
            { 
?>
<br><font face="Verdana" style="font-size:9pt"><?php echo "<a href='detail.php?id=$myrow[id]'>$myrow[nama_pasien]";?></font>
<?php
           }
 	  while ($myrow = mysql_fetch_array($resultcari));
   		 // echo "<br>";
           }

echo "<br>";
      }
	  
  } //akhir else todo ==search dan keyword tidak terisi (==terisi)
  //akhir keyword-nya kosong
  echo"<br>";

?>
</td></tr>
	
</div> <!-- well -->
</div> <!-- span8 -->
</div> <!-- row -->
    </div> <!-- /container -->

<?php include("./footer.php"); ?>
