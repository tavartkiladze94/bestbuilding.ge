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
    .project_images
    {
    width:90%; 
    height:400px;
    }
    .next
    {
        color: #f1d766;font-size:50px;margin-right:93px;
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
              height:600px!important;
          }
          
 }
 @media (max-width: 1199px)
  {
          .container
           {
               width:100%!important;
               margin-right:0;
               padding-left:0;
               padding-right:0;
               margin-left:10px;
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
    @media (max-width: 991px)
  {
          .container
           {
               width:100%!important;
               margin-right:0;
               padding-left:0;
               padding-right:0;
               margin-left:3px;
           }
           .project_images
           {
               width:100%!important;
           }
           .next
           {
               margin-right:20px;
           }
  }
</style>
<script src="<?=base_url();?>assets/js/ism-2.2.min.js"></script>
 <meta property="og:url"           content="https://www.bestbuilding.ge/main/project_details/<?php echo $project_details['code']; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $project_details[$this->lang->line('project_title_lang')]; ?>" />
  <meta property="og:description"   content="<?php echo $project_details[$this->lang->line('project_short_text_lang')]; ?>" />
  <meta property="og:image"         content="http://www.bestbuilding.ge/assets/images/projects/<?php echo $project_details['file_name'];?>"/>
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
<a class="nav-link" href="<?=base_url('main/contact');?>"><?=$this->lang->line('Contact');?></a>
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


  <div class="container">
 <div class="apart_menu">
					        <div class="apart_menu_block"   id="current_work">
					            <h3 style=" margin:auto;  text-align:center;margin-top:10px;color:#f1d766;font-size:28px;"><b>მიმდინარე სამუშაოები </b></h3>
					            
					       </div>
					        <div class="apart_menu_block" id="description" >
					            <h3 style=" margin:auto;  text-align:center; margin-top:10px;color:#f1d766; font-size:28px;" ><b>პროექტის შესახებ</b></h3>
					       </div>
					       
					    </div>
</div>

<section class="section bg-light" style="background-color: #373334!important; min-height:700px;">
<div class="container" style="width:90%!important; margin-top:80px;  " id="current_work_block" >
        
<?php if (!empty($current_works)) foreach ($current_works as $current_works_item): ?>

<div class="row" style="border-top:1px solid #f1d766; padding-top:15px;">
<div class="col-md-6 order-lg-1 mb-5" >
  <div class="container" >
      <?php $r=1; ?>
      <?php if(!empty($curr_works_img)) foreach($curr_works_img[$current_works_item['code']] as $works_img): ?>
    
  <div class="<?php echo $current_works_item['code']; ?>" <?php if($r!=1) echo "style='display:none;'"; ?>>
    <div class="numbertext"></div>
    <img src="<?=base_url();?>assets/images/current_works/<?php echo $works_img['file_name']; ?>" class="project_images">
  </div>

    
  <?php $r++; ?>
<?php endforeach; ?>
   
 
    
  <a class="prev" onclick="plusSlides(-1, '<?php echo $current_works_item['code']; ?>')" style="color: #f1d766;font-size:50px;margin-left:21px;">❮</a>
  <a class="next" onclick="plusSlides(1, '<?php echo $current_works_item['code']; ?>')"  >❯</a>
 
  

</div>
</div>

<div class="col-md-5 order-lg-3" style="padding-left:40px;">
<div style="width:50%; float:left:"> <h3 class="text-uppercase heading mb-4" style="color: #f1d766;"><?php echo $current_works_item['date']; ?></h3></div>

<p class="mb-3"><?php echo $current_works_item[$this->lang->line('project_full_text_lang')]; ?></p>
</div>
</div>

<?php endforeach; ?>

 
 </div>


<div class="projects"  id="description_block" >
    
<div class="row">
    <div style="width:100%!important;"> <h2 class="text-uppercase heading mb-4" style="color:#f1d766;"><?php echo $project_details[$this->lang->line('project_title_lang')]; ?> </h2>
    
    <div ><div class="fb-like" data-href="https://www.bestbuilding.ge/main/project_details/<?php echo $project_details['code']; ?>" data-width="150" data-layout="button_count" data-action="like" data-size="large" data-share="true" ></div></div>
    <br></div>
    
    <br>
    <div > <h3 class="text-uppercase heading mb-4" style="font-size:15px;color: #f1d766;">2021-03-02 23:53</h3></div>

<p class="mb-3" style="color: #f1d766!important;">
    <?php echo $project_details[$this->lang->line('project_full_text_lang')]; ?></p>
  <div class="container" >
      <?php $rr=1; ?>
      <?php if (!empty($imagess)) foreach ($imagess as $imagess_item): ?>
  <div class="mySlidesss" >
    <div class="numbertext" style="width:80px!important; height:30px!important;"><?php echo $rr." / ".count($imagess); ?></div>
    <img class="projects-images" src="<?=base_url();?>assets/images/projects/<?php echo $imagess_item['file_name']; ?>">
  </div>
<?php $rr++; ?>
<?php endforeach; ?> 
  <a class="prev" onclick="plusSlides1(-1)" style="color: #f1d766;font-size:50px;">❮</a>
  <a class="next" onclick="plusSlides1(1)" style="color: #f1d766;font-size:60px;">❯</a>

  

</div>

</div>
 
 </div>

</section>

<script>
var slideIndex = 1;
var slideIndexx = 1;
showSlides1(slideIndexx);
function plusSlides(n, classs) {
  showSlides(slideIndex += n, classs);
}

function currentSlide(n, classs) {
  showSlides(slideIndex = n, classs);
}

function showSlides(n, classs) {
  var i;
  var slides = document.getElementsByClassName(classs);
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

function plusSlides1(n) {
  showSlides1(slideIndexx += n);
}

function currentSlide1(n) {
  showSlides1(slideIndexx = n);
}


function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesss");
  var dots = document.getElementsByClassName("demoo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndexx = 1}
  if (n < 1) {slideIndexx = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexx-1].style.display = "block";
  dots[slideIndexx-1].className += " active";
  captionText.innerHTML = dots[slideIndexx-1].alt;
}
</script>