<script>
$(document).ready(function(){
   $("span").css("color", "#f1d766");
   
      
  });
  
});
</script>
<style>
 .element-animated img
{
    min-height:270px;
    height:300px;
    max-height:300px;
}
    .fa-chevron-left
    {
        color:#f1d766!important;
    }
    .fa-chevron-right
    {
        color:#f1d766!important;
    }
    .heading.border-bottom:before{display:none;}
    .media-feature
    {
        background-color: #524e42;
    }
    .text-black
    {
        margin-top:20px;
         color: #f1d766!important;
    }
    .btn.btn-outline-primary
    {
        font-size:14px;
        color: #b47f12;
        margin-top:8px;
    }
    .media-feature:hover, .media-feature:focus
    {
    border-bottom: 20px solid #f1d766;
    border-radius: 4px;
    font-size: 15px;
    }
    .btn-outline-primary
    {
        border-color: #b47f12;
    }
    .owl-dot
    {display:none;}
    .btn.btn-outline-primary:hover
    {
        color: #;
    }
  
  

@media (min-width: 1200px)
  {
           .container{
              width:97%!important;
              max-width:97%;
              margin-bottom:30px;
           }
           .slaidi
           {
               max-height:800px;
           }
           .newss
           {
               width:70%;
               margin:auto;
           }
           .main_news_images
           {
               
               
               width:100%;
           }
           .news_col-lg-4
           {
               flex: 0 0 50%;
              max-width: 50%;
           }
           .media_custom:hover
           {
               border:1px solid #b47f12;
           }
          
 }
  p{color: #f1d766;}
</style>
<!--<?php echo $map['js']; ?>
 <section class="owl-carousel owl-loaded owl-drag" style="margin-bottom:150px;">


<div class="owl-stage-outer" style="width:100%;">
      <div class="container slaidi" style=" max-width:100%;">
     
  
   <div class="mySlidesss" >
<video autoplay muted loop style="width:100%;" class="video1">
  <source src="http://bestbuilding.ge/video/mainvideo.mp4" type="video/mp4">
  Your browser does not support HTML video.
</video>
  </div>
  <a class="prev" onclick="plusSlides1(-1)" style="color: #f1d766;font-size:50px;">❮</a>
  <a class="next" onclick="plusSlides1(1)" style="color: #f1d766;font-size:50px;margin-right:10px;">❯</a>

  

</div>

</div>
</section> -->
<section class="section" style="padding:0; padding-top:70px;">
<div class="container">
    <p><i class="fa fa-user" style="color:#f1d766; margin:auto;"></i> <?php echo $view;?></p>
<div class="row justify-content-center mb-5 element-animate fadeInUp element-animated" >
<div class="col-md-8 text-center">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766;"><?=$this->lang->line('Building materials');?></h2>
<hr style="background-color: #f1d766; width:220px;margin-bottom:20px; margin-top: -17px;">
</div>
<div class="row mb-5" style="margin-top:40px;">
    <?php foreach ($materials as $materials_item): ?>
<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated">
<div class="media d-block media-feature text-center" >

<div class="media-body">
    <img src="<?=base_url();?>assets/images/building_materials/<?php echo $materials_item['file_name'];?>" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px;"><?=$this->lang->line($materials_item['category']);?></h3>
<p><a href="<?=base_url('main/material_details/');?><?php echo $materials_item['category'];?>" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>
<?php endforeach; ?>

</div>

</div>
</div>
</section>
<section class="section bg-light" >

<div class="container" >
    
<div class="col-md-8 text-center" style="max-width:100%; margin-bottom:70px;">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766; margin:auto;"><?=$this->lang->line('Current projects');?></h2>
<hr style="background-color: #f1d766; width:400px;margin-bottom:20px; margin-top: -17px;">
</div>

<div class="row newss" >
<div class="news_col-lg-4 col-md-6 element-animate fadeInUp element-animated "   style="margin-bottom:20px;">
<div class="media d-block media-custom text-left" style="background-color: #373334;margin:auto;">
<img  src="<?=base_url();?>assets/images/projects/<?php echo $project_black['file_name']; ?>"  class="img-fluid main_news_images"  style="width:%; height: 400px;">
<div class="media-body">
<span class="meta-post"><?php echo $project_black['date']; ?></span>
<h3 class="mt-0 text-black"><a href="#" class="text-black">BLACK SEA TOWERS</a></h3>
<p><?php echo $project_black[$this->lang->line('project_short_text_lang')]; ?></p>
<p class="clearfix">
<a href="<?=base_url('main/project_details');?>/<?php echo $project_black['code']; ?>" class="float-left" style="font-size: 18px; color: #b47f12;"><?php echo $this->lang->line('View more') ; ?></a>
</p>
</div>
</div>
</div>
<div class="news_col-lg-4 col-md-6 element-animate fadeInUp element-animated "   style="margin-bottom:20px; ">
<div class="media d-block media-custom text-left" style="background-color: #373334;margin:auto;">
<img  src="<?=base_url();?>assets/images/projects/<?php echo $vila_axalsofeli['file_name']; ?>"  class="img-fluid main_news_images"  style="width:100%; height: 400px;">
<div class="media-body">
<span class="meta-post"><?php echo $vila_axalsofeli['date']; ?></span>
<h3 class="mt-0 text-black"><a href="#" class="text-black">ვილა ახალსოფელი</a></h3>
<p><?php echo $vila_axalsofeli[$this->lang->line('project_short_text_lang')]; ?></p>
<p class="clearfix">
<a href="<?=base_url('main/project_details');?>/<?php echo $vila_axalsofeli['code']; ?>" class="float-left" style="font-size: 18px; color: #b47f12;"><?php echo $this->lang->line('View more') ; ?></a>
</p>
</div>
</div>
</div>

</div>
</div>
</section>
<section class="section" style="padding:0; padding-top:70px;">
<div class="container">
<div class="row justify-content-center mb-5 element-animate fadeInUp element-animated" >
<div class="col-md-8 text-center">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766;"><?=$this->lang->line('Services');?></h2>
<hr style="background-color: #f1d766; width:220px;margin-bottom:20px; margin-top: -17px;">
</div>
<div class="row mb-5" style="margin-top:40px;">
<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated">
<div class="media d-block media-feature text-center" >

<div class="media-body">
    <img src="<?=base_url();?>assets/images/services/construction.jpg" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px;"><?=$this->lang->line('Construction');?></h3>
<p><a href="#" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated" >
<div class="media d-block media-feature text-center" >
<div class="media-body">
     <img src="<?=base_url();?>assets/images/services/renovation1.jpeg" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px; color: #f1d766;"><?=$this->lang->line('Renovation');?></h3>

<p><a href="#" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated" >
<div class="media d-block media-feature text-center" >
<div class="media-body">
    <img src="<?=base_url();?>assets/images/services/santexnika.jpeg" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px;"><?=$this->lang->line('Plumbing');?></h3>

<p><a href="#" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated">
<div class="media d-block media-feature text-center">
<div class="media-body">
     <img src="<?=base_url();?>assets/images/services/eleqtrooba.jpeg" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px;"><?=$this->lang->line('Electricity');?></h3>

<p><a href="#" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>

</div>

</div>
</div>
</section>

<section class="section bg-light" style="margin-top:50px;">

<div class="container" >
        <div class="col-md-8 text-center" style="max-width:100%; margin-bottom:70px;">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766; margin:auto;"><?=$this->lang->line('News');?></h2>
<hr style="background-color: #f1d766; width:220px;margin-bottom:20px; margin-top: -17px;">
</div>

<div class="row newss" >
    <?php foreach ($news as $news_item): ?>
<div class="news_col-lg-4 col-md-6 element-animate fadeInUp element-animated "  >
<div class="media d-block media-custom text-left" style="background-color: #373334;margin:auto;">
<img  src="<?=base_url();?>assets/images/news/<?php echo $news_item['file_name']; ?>"  class="img-fluid main_news_images"  style="width:100%; height: 400px;">
<div class="media-body">
<span class="meta-post"><?php echo $news_item['date']; ?></span>
<h3 class="mt-0 text-black"><a href="#" class="text-black"><?php echo $news_item[$this->lang->line('project_title_lang')]; ?> </a></h3>
<p><?php echo $news_item[$this->lang->line('project_short_text_lang')]; ?></p>
<p class="clearfix">
<a href="<?=base_url('main/news_details');?>/<?php echo $news_item['code']; ?>" class="float-left" style="font-size: 18px; color: #b47f12;"><?php echo $this->lang->line('View more') ; ?></a>
</p>
</div>
</div>
</div>

<?php endforeach; ?>



</div>
</div>
</section>


<section class="section bg-light">
<div class="container" style="margin-top:40px;">
<div class="row align-items-center">
    <div class="col-md-6  element-animate">
<img src="https://preview.colorlib.com/theme/pivot/img/work_thumb_1.jpg" alt="" class="img-fluid" style="width:80%;">
</div>
<div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
<div class="pr-lg-5">
<h2 class="text-uppercase heading border-bottom mb-4 text-left" style="font-size: 28px;color: #f1d766;"><?=$this->lang->line('about_us_text_title');?></h2>
<hr style="background-color: #f1d766;">
<p style="font-size: 18px;color: #f1d766;!important;">
<?=$this->lang->line('about_us_text');?>
</p>
 <a href="<?=base_url('main/about');?>" style="font-size:18px;color:#b47f12;"><?php echo $this->lang->line('View more') ; ?>>></a>
</div>
</div>

</div>
</div>
</section>


<script>
var slideIndexx = 1;
showSlides1(slideIndexx);

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
