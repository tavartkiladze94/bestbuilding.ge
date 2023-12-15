
<style>
@media (min-width: 992px)

{
    .col-lg-4
    {
        flex: 0 0 33%;
        max-width: 33.3%;
    }
}
.hrr
{
    background-color: #f1d766; width:390px;margin-bottom:20px; margin-top: -17px;
}
section .container
{
    width:70%!important;
    margin:auto;
}
.bg-light
{
    background-color: #373334!important;
}
.media-custom{
        background-color: #524e42!important;

}
 .fa-chevron-left
    {
        color:#0c3c64!important;
    }
    .fa-chevron-right
    {
        color:#0c3c64!important;
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
    @media (max-width: 991px)

{
    .hrr
    {
        width:250px
    }
}
</style>

<section class="section" style="padding:0; padding-top:40px;">
<div class="container">
<div class="row justify-content-center mb-5 element-animate fadeInUp element-animated" >
<div class="col-md-8 text-center">
<h2 class="text-uppercase heading border-bottom mb-4" style="padding-bottom:0;font-size:37px;color:#f1d766;"><?=$this->lang->line('Building materials');?></h2>
<hr class="hrr">
</div>
<div class="row mb-5" style="margin-top:40px;">
         <?php foreach ($materials as $materials_item): ?>

<div class="col-lg-4 col-md-6 col-12 mb-3 element-animate fadeInUp element-animated">
<div class="media d-block media-feature text-center" >

<div class="media-body">
    <img src="<?=base_url();?>assets/images/building_materials/<?php echo $materials_item['file_name']; ?>" alt="<?php echo $this->lang->line($materials_item['category']); ?>" style="width:100%; height:270px;">
<h3 class="mt-0 text-black" style="margin-top:20px!important; font-weight:bold; font-size:18px;"><?php echo $this->lang->line($materials_item['category']); ?></h3>
<p><a href="<?=base_url('main/material_details');?>/<?php echo $materials_item['category']; ?>" class="btn btn-outline-primary btn-sm"><?=$this->lang->line('View more');?></a></p>
</div>
</div>
</div>
	<?php endforeach; ?>

</div>

</div>
</div>
</section>
