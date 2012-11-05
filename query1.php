<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, Belajar PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../page1/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../page1/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../page1/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../page1/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../page1/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../page1/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../page1/assets/ico/apple-touch-icon-57-precomposed.png">
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
      $koneksi=mysql_connect("localhost","test","maarif");
      mysql_select_db("test");
      $query="select * from pegawai";
      $hasil=mysql_query($query);
      while($row=mysql_fetch_row($hasil))
      {
			echo $row[0]." - ".$row[1]." - ".$row[2]." - ".$row[3]."<br>";
	  }
	  mysql_close($koneksi);
	  ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../page1/assets/js/jquery.js"></script>
    <script src="../page1/assets/js/bootstrap-transition.js"></script>
    <script src="../page1/assets/js/bootstrap-alert.js"></script>
    <script src="../page1/assets/js/bootstrap-modal.js"></script>
    <script src="../page1/assets/js/bootstrap-dropdown.js"></script>
    <script src="../page1/assets/js/bootstrap-scrollspy.js"></script>
    <script src="../page1/assets/js/bootstrap-tab.js"></script>
    <script src="../page1/assets/js/bootstrap-tooltip.js"></script>
    <script src="../page1/assets/js/bootstrap-popover.js"></script>
    <script src="../page1/assets/js/bootstrap-button.js"></script>
    <script src="../page1/assets/js/bootstrap-collapse.js"></script>
    <script src="../page1/assets/js/bootstrap-carousel.js"></script>
    <script src="../page1/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
