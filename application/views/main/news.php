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

<section class="section">
<div class="container" style="width:80%!important;">
    
    <?php foreach ($news as $news_item): ?>

<div class="row">
<div class="col-md-6 order-lg-1 mb-5" >
<img src="<?=base_url();?>assets/images/news/<?php echo $news_item['file_name']; ?>" alt="<?php echo $news_item['file_name']; ?>" class="img-fluid" style="width:100%; height:400px;">
</div>
<div class="col-md-5 order-lg-3">
    <div style="width:100%; float:left:"> <h2 class="text-uppercase heading mb-4" style="color: #f1d766;font-size:24px;"><?php echo $news_item[$this->lang->line('project_title_lang')]; ?> </h2></div>
    <div style="width:50%; float:left:"> <h3 class="text-uppercase heading mb-4" style="font-size:18px;color: #f1d766;"><?php echo $news_item['date']; ?></h3></div>

<p class="mb-3" style="color: #f1d766;font-size:18px;"><?php echo $news_item[$this->lang->line('project_short_text_lang')]; ?></p>
<a href="<?=base_url('main/news_details');?>/<?php echo $news_item['code']; ?>" style="color: #b47f12;"><?php echo $this->lang->line('View more') ; ?> &#160>></a>
</div>
</div>
<br>

<br>
<br>
 <?php endforeach; ?>


</div>
</section>