<?php
    $koneksi = new mysqli("localhost","root","","pendaftaran_semeru");
    ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TNBTS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <!-- link -->
   <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Pendaftaran</a> 
            </div>
<!--MENU-->
      <header class="ipm">
        <nav>
          <div class="menu">
            <ul class="menu2">
              <li><a href="halaman pertama.php" class="active">Home</a></li>
              <li><a href="#">Pendaftaran</a></li>
              <li><a href="halaman pertama.php#Biodata">Semeru</a></li>
              <li><a href="halaman pertama.php#t01">tiket</a></li>
              <li><a href="form1.html">Contact</a></li>
            </ul>
          </div>
      </header>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/logo.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?page=sop"><i class="fa fa-dashboard fa-3x"></i> SOP</a>
                    </li>   
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-dashboard fa-3x"></i> Data anggota</a>
                    </li>
                    <li>
                        <a  href="?page=buku" id="buku"><i class="fa fa-dashboard fa-3x"></i> Registrasi</a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi</a>
                    </li>
                    </ul>
                                       
                 
            </div>
        </nav>   
        <div>
        </div>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php

                            $page = $_GET['page'];
                            //$aksi = $_GET['aksi'];
                    
                            if ($page == "buku") {
                                if(!isset($_GET['aksi']))  {
                                    include "page/registrasi.php";
                                }
                            } else if(isset($_GET['aksi']) && $_GET['aksi'] == "tambah"){
                                include "page/tambah.php";
                            } else if($page == "anggota"){
                                if (!isset($_GET['aksi'])) {
                                    include "page/anggota.php";
                                }   
                            } else if($page == "sop"){
                                if (!isset($_GET['aksi'])) {
                                    include "page/sop.php";
                                }
                            } else if($page == "transaksi"){
                                if (!isset($_GET['aksi'])) {
                                      include "page/transaksi.php";
                                }
                            }
                            else if(isset($_GET['aksi']) && $_GET['aksi'] == "ubah"){
                                include "page/ubah.php";
                            }
                            else if(isset($_GET['aksi']) && $_GET['aksi'] == "hapus"){
                                include "page/hapus.php";
                            } 
                            
                        ?>
                       
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
      <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    
    
   
</body>
</html>