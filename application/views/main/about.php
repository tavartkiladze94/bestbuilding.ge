<style>.element-animate
    {
        opacity:1!important;
        visibility:visible;
    }</style>
<script>
$(document).ready(function(){
  $("span").css("color","#f1d766");
$("hr").css("background-color","#f1d766");
 $("marker").css("margin-left","70px;");
});
</script>

<section class="section bg-light" style="margin-top:100px;">
       
<div class="container">
    <div class="row justify-content-center mb-5 element-animate fadeInUp element-animated" >
<div class="col-md-8 text-center">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766;"><?=$this->lang->line('About us');?></h2>
<hr class="hrr" style="width:220px;">
</div>
</div>
  
<div class="row align-items-center">
    <div class=" element-animate" style="width:90%; margin:auto;">
<img src="<?=base_url();?>assetss/images/about/about.jpg" alt="" class="img-fluid" style="float: left; margin-right: 100px;">

<font color="black" style="font-size:18px;color: #f1d766; "><?php echo $about_text[$this->lang->line('about_text')];?></font>
</div>
<div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
</div>

</div>
</div>
</section>
<section class="section" style="padding-top:100px; margin-bottom:100px;">
<div class="container">
 <div class="row justify-content-center mb-5 element-animate fadeInUp element-animated" >
<div class="col-md-8 text-center mb-5">
<h2 class="text-uppercase heading border-bottom mb-4" style="font-weight:bold;color: #f1d766;">ჩვენი გუნდი</h2>
<hr style="background-color: #f1d766; width:20%;margin-bottom:20px; margin-top: -40px;">

</div>
</div>
<div class="row">
<div class="col-md-6 element-animate fadeInUp element-animated" >
<div class="media d-block  text-center" >
    <div style="width:350px; margin:auto;height:320px; background-color:#524e42;">
<img src="<?=base_url();?>assetss/images/team/ira.jpg" alt="Image placeholder" class="img-fluid mb-3" style="width:100%;height:200px; max-heght:200px;">
<h3 style="font-weight:bold;font-size:25px;color: #f1d766;">ირაკლი გოგიტიძე</h3>
<p style="font-size:20px;color: #f1d766;">საქმეთა მმართველი</p>
</div>
</div>
</div>
<div class="col-md-6 element-animate fadeInUp element-animated">
<div class="media d-block  text-center">
    <div style="width:350px; margin:auto;height:320px; background-color:#524e42;">
<img src="" alt="Image placeholder" class="img-fluid mb-3" style="width:100%;height:200px; max-heght:200px;">
<h3 style="font-weight:bold; font-size:25px;color: #f1d766; margin-top:170px;">ბესიკ თურმანიძე</h3>
<p style="font-size:20px;color: #f1d766;">დირექტორი</p>
</div>
</div>
</div>
</div>
</div>
</section>

