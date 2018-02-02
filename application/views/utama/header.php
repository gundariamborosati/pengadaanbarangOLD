<!DOCTYPE html>
<html lang="en">
<head>
  <title>PT Bhakti Unggul Teknovasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      position: fixed;
      background-color: grey;
      text-align: center;
      color: white;
      left: 0px;
      bottom: 0px;
      height: 30px;
      width: 100%;
    }
    
    .isi {
      font-family: times new roman;
      font-size: 20px;
      color: black;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
      }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="<?php echo base_url ()?>asset/img/logo.jpg" width="100" height="50">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><?=anchor('c_user/home','Home')?></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrasi</a>
        <ul class="dropdown-menu">
   				 <li><?=anchor('','Register Customer')?></li>
   				 <li><?=anchor('c_vendor/add','Register Vendor')?></li>
	     	</ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?=anchor('c_user/login','Login')?></li>
      </ul>
    </div>
  </div>
</nav>
