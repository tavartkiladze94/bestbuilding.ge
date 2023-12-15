<!doctype html>
<html lang="ge">
<head>
<meta charset="UTF-8">
<title>სამშენებლო კომპანია "Bestbuilding"- ბესთბილდინგ</title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="სამშენებლო კომპანია Bestbuilding ">
<meta name="keywords" content="სამშენებლო, კომპანიები,რემონტი,ელექტროობა,მშენებლობა,  აივნები, მოაჯირები,  ხარაჩოები, კრაკადილი, სტენდი, ფილა, შექმნა, სანტექნიკა, აშენება, მოხელეები, mshenebloba, kompaniebi, samsheneblo kompania, masalebi, samsheneblo masalebi,  xarachoebi, krakadili. aivani, moajiri, stendi, fila, remonti, asheneba,  santeqnika, sheqmna">
 <meta name="author" content="Nika Tavartkiladze">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<meta property="og:url"           content="https://bestbuilding.ge/main/news_details/<?php echo $news_details['code']; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $news_details[$this->lang->line('project_title_lang')]; ?>" />
  <meta property="og:description"   content="<?php echo $news_details[$this->lang->line('project_short_text_lang')]; ?>" />
  <meta property="og:image"         content="<?=base_url();?>assets/images/news/<?php echo $news_details['file_name']; ?>" />

<style>
    span, li, b
    {
        font-size:18px;
        color: #f1d766!important;
        font-weight: 1px!important;
    }
    .numbertext
           {
               width:1px!important; height:100%;background-color: #373334;
           }
    .container
    {
        width:70%!important;
    }
     @media (min-width: 1200px)
  {
           .projects
           {
               width:85%!important;
               margin: 80px auto;
           }
           
           
          .projects-images
          {
              width:60%!important; 
              margin:auto;
              margin-left:20%!important;
              height:500px!important;
          }
          
 }
 @media (max-width: 1199px)
  {
          .container
           {
               width:90%!important;
           }
           .apart_menu
           {
               width:100%!important;
           }
             .projects
           {
               width:80%;
               margin:auto;
           }
           
         
          .projects-images
          {
              width:100%!important; 
              
              height:440px!important;
          }
 }
    
</style>
<script src="<?=base_url();?>assets/js/ism-2.2.min.js"></script>
 <meta property="og:url"           content="http://bestbuilding.ge/main/news_details/<?php echo $news_details['code']; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $news_details[$this->lang->line('project_title_lang')]; ?>" />
  <meta property="og:description"   content="<?php echo $news_details[$this->lang->line('project_short_text_lang')]; ?>" />
  <meta property="og:image"         content="<?=base_url();?>assets/images/projects/<?php echo $news_details['file_name']; ?>" />
<script>
$(document).ready(function(){
 
   //<?php if (!empty($current_works)) foreach ($current_works as $current_works_item): ?>


  //setInterval(function(){ plusSlides(1, '<?php echo $current_works_item['code']; ?>'); }, 1000);
 //<?php endforeach; ?>
   $("#current_work_block").css("display", "block");
   $("#description_block").css("display", "none");
  $("#current_work").click(function(){
    $("#description_block").css("display", "none");
    $("#current_work_block").css("display", "block");
      
  });
 
  $("#description").click(function(){
    $("#current_work_block").css("display", "none");
    $("#description_block").css("display", "block");

  });
$("span").css({"color":"#f1d766", "background-color":"#373334"});
});
</script>

</head>
<body style="background-color: #373334!important;">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?=$this->lang->line('en_US');?>/sdk.js#xfbml=1&version=v10.0&appId=494287245066559&autoLogAppEvents=1" nonce="7z1O7U8X"></script>
    
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
<a class="nav-link" href="<?=base_url('main/contact');?>"><?=$this->lang->line('Contact');?></a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?=base_url('main/contact');?>"></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=base_url('admin/login');?>">შესვლა</a>
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

<section class="section">
<div class="container" style=" margin:50px auto;">

<div class="row">
<div style="width:100%; margin:auto;margin-bottom:50px;">
      <h2 style="color:#f1d766;"> <?php echo $news_details[$this->lang->line('project_title_lang')]; ?></h2>
      <br>
      <div class="fb-like" data-href="http://www.bestbuilding.ge/main/news_details/<?php echo $news_details['code']; ?>" data-width="150" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
      <br>
      <br>
     <p style="color: #f1d766; margin:5px; font-size:18px; margin-bottom:50px;"><?php echo $news_details[$this->lang->line('project_full_text_lang')]; ?> &#160 </p>
       <div class="container" style="width:90%!important:margin:auto;">
               <?php $raod=1; ?>
<?php if (!empty($images)) foreach ($images as $images_item): ?>
  <div class="mySlides" >
      <div class="numbertext"> </div>
    <div class="numbertext" style="width:55px!important;height:60px;"><p style="color:#f1d766; background-color: #524e42;font-size:16px;"><?php echo $raod; ?> / <?php echo count($images); ?></p> </div>
    <img src="<?=base_url();?>assets/images/news/<?php echo $images_item['file_name']; ?>" style="width:100%; ">
  </div>
<?php $raod++; ?>
<?php endforeach; ?><br>
<br>
  <a class="prev" onclick="plusSlides(-1)" style="color: #f1d766;font-size:50px;">❮</a>
  <br><br>
  <a class="next" onclick="plusSlides(1)" style="color: #f1d766; font-size:50px; margin-right:10px;">❯</a>

  

  <!--<div class="row" style="margin-top:5px; ">
       <?php $raode=1; ?>
        <?php if (!empty($imagess)) foreach ($imagess as $imagess_item): ?>
    <div class="column" style="margi: 0 3px; border: 2px solid #524e42;">
      <img class="demo cursor" src="<?=base_url();?>assets/images/news/<?php echo $imagess_item['file_name']; ?>" style="height:100px; width:100%;max-height:100px;" onclick="currentSlide(<?php echo $raode; ?>)" alt="The Woods">
    </div>
    <?php $raode++; ?>
<?php endforeach; ?>
  </div>
  -->
</div>

</div>


</div>
</div>
</section>
<script>
    
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


</script>