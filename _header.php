<?php
	require_once "_config/config.php";

	if(!isset($_SESSION['user'])) {
  	// echo "hello world. <a href=\"auth/logout.php\">Logout</a>";
    echo "<script>window.location='".base_url('auth/login.php')."'; </script>";
  }
  ?> 
  	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Rekam Medis</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/yikcoding.png')?>">

</head>
<body>
	    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Rumah Sakit </b></span></a>
                </li>
                <li>
                    <a href="<?php base_url('dashboard') ?>">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Pasien</a>
                </li>
                <li>
                    <a href="#">Data Dokter</a>
                </li>
                <li>
                    <a href="#">Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?=base_url('obat/data.php')?>">Data Obat</a>
                </li>
                <li>
                    <a href="#">Rekam Medis</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Log Out</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
   <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>

 
 