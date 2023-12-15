<!doctype html>
<html lang="ge">
<head>
    <meta charset="UTF-8">
<title>სამშენებლო კომპანია "Bestbuilding"- ბესთბილდინგ</title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="<?php echo $content;?>">
<meta name="keywords" content="სამშენებლო, კომპანიები,რემონტი,ელექტროობა,მშენებლობა,  აივნები, მოაჯირები,  ხარაჩოები, კრაკადილი, სტენდი, ფილა, შექმნა, სანტექნიკა, აშენება, მოხელეები, mshenebloba, kompaniebi, samsheneblo kompania, masalebi, samsheneblo masalebi,  xarachoebi, krakadili. aivani, moajiri, stendi, fila, remonti, asheneba,  santeqnika, sheqmna">
 <meta name="author" content="Nika Tavartkiladze">
<link href="https://fonts.googleapis.com/css?family=K2D:400,700|Niramit:300,700" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.timepicker.css">
<link rel="stylesheet" href="<?=base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="<?=base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="<?=base_url();?>assets/css/my-slider.css"/>
<link rel="stylesheet" href="<?=base_url();?>assets/css/stylee.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style2.css">


</head>
 <body style="background-color: #373334!important; color: #f1d766!important">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?=$this->lang->line('en_US');?>/sdk.js#xfbml=1&version=v10.0&appId=494287245066559&autoLogAppEvents=1" nonce="1CILW9JI"></script>
    
<header role="banner" style="background-color:#373334;">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#373334!important;">
<div class="container" style="margin-left:0; padding-left: 0; ">
    <div style="width:300px;"><a  href="#"><img class="logo" src="<?=base_url();?>assets/images/llllog.jpg" alt="" style="width:280px; height:130px;"</a></div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon" ><i class="fa fa-bars" style="font-size:27px;"></i></span>
</button>
<div class="collapse navbar-collapse position-relative" id="navbarsExample05" style=" padding-right:0!important; ">
<ul class="navbar-nav mx-auto pl-lg-5 pl-0 d-flex align-items-center" >
<li class="nav-item">
 <a class="nav-link" href="<?=base_url('main/index');?>"><?=$this->lang->line('Home');?></a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/projects');?>"><?=$this->lang->line('projects');?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/building_materials');?>"><?=$this->lang->line('Building materials');?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/services');?>"><?=$this->lang->line('Services');?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/news');?>"><?=$this->lang->line('News');?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/about');?>"><?=$this->lang->line('About us');?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="http://www.bestbuilding.ge/main/contact"><?=$this->lang->line('Contact');?></a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/contact');?>"></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('admin/login');?>"><?=$this->lang->line('Log in');?></a>
</li>
<li class="nav-item dropdown"  >
    <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?=$this->lang->line('Lang');?></a>
    <div class="dropdown-menu" aria-labelledby="dropdown04" style="background-color: #524e42!important; width:80px!important;min-width:80px!important;">
    <a class="dropdown-item" style="color:#f1d766; " href="<?=base_url($this->uri->segment(1).'/setLanguage/ge/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>"> <?=$this->lang->line('Georgian');?></a>
            <a class="dropdown-item" style="color:#f1d766;" href="<?=base_url($this->uri->segment(1).'/setLanguage/ru/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>"> <?=$this->lang->line('Russian');?></a>
            <a class="dropdown-item" style="color:#f1d766;" href="<?=base_url($this->uri->segment(1).'/setLanguage/en/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>"><?=$this->lang->line('English');?></a>
           </div>
</li>
</ul>
</div>
</div>
</nav>
</header>