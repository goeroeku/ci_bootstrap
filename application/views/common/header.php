<!DOCTYPE html>
<html lang="id">
<head>
    <title>CI - Bootstrap Template</title>
    <link rel="stylesheet" href="<?php echo base_url('gudang/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('gudang/css/style.css');?>">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php echo base_url('gudang/img/tut.png');?>">
        </div>
        <?php 
          $home_aktif = ""; $siswa_aktif = "";
          $menu = isset($menu) ? $menu : '';
          switch ($menu) {
            case 'siswa':
              $siswa_aktif = "class='active'";
              break;
            default:
              $home_aktif = "class='active'";
              break;
          }
         ?>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo $home_aktif; ?> ><a href="<?php echo base_url();?>">Home</a></li>
            <li <?php echo $siswa_aktif; ?>><a href="<?php echo base_url('siswa');?>">Siswa</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>