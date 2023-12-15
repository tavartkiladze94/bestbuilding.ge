<!DOCTYPE html>

<html lang="en">

<head>
  <title><?=$this->lang->line('Control panel');?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">



  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


  <!-- Bootstrap Stylesheet -->
   <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/checkbox.css">
 
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/bootstrap.min4.2.1.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/css/bootstrap.min4.2.1.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/vendors/datatables/datatables.min.css">
  
    <link href="<?=base_url();?>assetsbest/css/style.css" rel="stylesheet">
        <link href="<?=base_url();?>assetsbest/css/slick.css" rel="stylesheet">
        <link href="<?=base_url();?>assetsbest/css/slick-theme.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/custom.datatables.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/style.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsbest/admin/vendors/fontawesome-free-5.11.2-web/css/all.min.css">
  <!-- Custom Stylesheet End-->

<style>
   
   .fa-user-alt,.fa-cog,.fa-unlock,.fa-power-off
   {
       color: #44cc5b;
   }
  
   .top-bar nav.navbar ul.nav-list li.profile .dropdown-menu a:hover
   {
      
       background-color: #44cc5b;
        color:white;
   }
   
   
   .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item .sub-menu a.items-list3, .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item .sub-menu a.items-list1
   {
        background-color: #153f53;
    }
    .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item a.items-list2 span:first-child i, .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item a.items-list span:first-child i
    {
            padding: 0 5px 0 15px;
             color: #44cc5b;
    }
    .top-bar nav.navbar ul.nav-list li.notifications a, .top-bar nav.navbar ul.nav-list li.messages a
    {
        color: #44cc5b;
    }
    .top-bar nav.navbar ul.nav-list li.notifications > .dropdown-menu a i, .top-bar nav.navbar ul.nav-list li.messages > .dropdown-menu a i
    {
        color: #44cc5b;
    }
    .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item a.items-list2:hover, .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item a.items-list:hover
     {
        background-color: #44cc5b;
    }
    .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item a.items-list2:hover
    {
        background-color: #44cc5b;
    }
    .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item .sub-menu a.items-list3:hover, .wrapper .sidebar-left > .side-menu ul.navbar-nav li.nav-item .sub-menu a.items-list1:hover
    {
        background-color: #44cc5b;
    }
    .wrapper .sidebar-left .side-bar-bottom a i
    {
        color: #44cc5b;
    }
    .wrapper .sidebar-left .side-bar-bottom ul li:hover i
    {
        color: white;
    }
    .wrapper.active .sidebar-left .side-menu ul.navbar-nav li.nav-item a.items-list2 span:first-child i, .wrapper.active .sidebar-left .side-menu ul.navbar-nav li.nav-item a.items-list span:first-child i
    {
        color: #44cc5b;
    }
    .wrapper.active .sidebar-left .side-bar-bottom a i
    {
         color: #44cc5b;
    }
    .wrapper.active .sidebar-left .side-bar-bottom ul li:hover i
    {
        color: white;
    }
    .flight-listing-form form ul li:nth-child(2) button, .flight-listing-form form ul li:nth-child(1) button, .car-listing-form form ul li:nth-child(2) button, .car-listing-form form ul li:nth-child(1) button, .cruise-listing-form form ul li:nth-child(2) button, .cruise-listing-form form ul li:nth-child(1) button, .tour-listing-form form ul li:nth-child(2) button, .tour-listing-form form ul li:nth-child(1) button, .hotel-listing-form form ul li:nth-child(2) button, .hotel-listing-form form ul li:nth-child(1) button
    {
        background-color: #44cc5b;
    }
    .flight-listing-form form .form-group, .car-listing-form form .form-group, .cruise-listing-form form .form-group, .tour-listing-form form .form-group, .hotel-listing-form form .form-group
    {
        margin-bottom: 20px;
    }
    .box .tools-btns a i
    {
        background-color: #44cc5b;
    }
    .box .add-new a
    {
        background-color: #44cc5b;
    }
    .content.flight-listing-content table tr td:nth-child(10) a i.fa-trash-alt, .content.car-listing-content table tr td:nth-child(10) a i.fa-trash-alt, .content.cruise-listing-content table tr td:nth-child(10) a i.fa-trash-alt, .content.tour-listing-content table tr td:nth-child(10) a i.fa-trash-alt, .content.listing-content table tr td:nth-child(10) a i.fa-trash-alt
    {
        background-color: #44cc5b;
    }
    .drosha_block
    {
        width:20%; 
        height:70%; 
        margin-left: 50px;
    }
    .drosha
    {
        width:30%; 
        height:100%;
        float:left;
        margin-left:3%;
    }
   
    @media only screen and (max-width: 991px) {
    .drosha_block
    {
        width:25%; 
        height:70%; 
        margin-left: 45px;
    }
    .drosha
    {
        width:29%; 
        height:100%;
        float:left;
        margin-left:4%;
    }
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body style="background-color: white;">


  <div class="wrapper" >

    <!-- ===========Top-Bar============= -->
    <div class="top-bar" >
      <nav class="navbar" style="background-color: #153f53;">
        <button class="navbar-toggler d-block sideMenuToggler" type="button">
          <span class="fa fa-bars"></span>
          
        </button>
        <!--
        <div class="drosha_block">
            <div class="drosha"><a href="<?=base_url('controler/setLanguage/ge/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>"><img src="<?=base_url();?>assetsbest/img/geo.png" style="width:100%; height:100%;"></a></div>
            <div class="drosha"><a href="<?=base_url('controler/setLanguage/ru/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>"><img src="<?=base_url();?>assetsbest/img/ru.png" style="width:100%; height:100%;"></a></div>
            <div class="drosha"><a href="<?=base_url('controler/setLanguage/en/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>"><img src="<?=base_url();?>assetsbest/img/eng.jpg" style="width:100%; height:100%;"></a></div>
        </div>
          -->
        <ul class="ml-auto list-unstyled nav-list list-inline d-flex my-auto">
          
          <!--<li class="nav-item list-inline-item dropdown messages">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-envelope"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #153f53;">
              <span><?=$this->lang->line('Messages');?></span>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="far fa-envelope"></i>სათაური<span>ტექსტი</span>
              </a>
              <a class="dropdown-item" href="#"><i class="far fa-envelope-open"></i>სათაური<span>ტექსტი</span></a>
              <a class="dropdown-item bottom-margin" href="#"><i class="far fa-envelope-open"></i>სათაური<span>ტექსტი</span></a>
              <div class="dropdown-divider"></div>
              <a href="#" class="btn mx-auto d-block"><?=$this->lang->line('View all');?></a>
            </div>
          </li> -->
         <!-- <li class="nav-item list-inline-item dropdown notifications">
						<a class="nav-link" href="<?=base_url('controler/messages');?>" >
							<i class="far fa-bell"></i><sup style="color:yellow;font-size:16px;" id="msg"></sup>
						</a>
				</li>
          <li class="nav-item list-inline-item dropdown profile">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="<?=base_url('uploads/users/');?><?=$this->session->userdata('photo');?>" alt="" class="img-fluid rounded-circle" width="30px" />
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #153f53;">
              <a class="dropdown-item" href="<?=base_url('controler/profile_view');?>/<?=$this->session->userdata('id');?>/<?=$this->session->userdata('name');?>/<?=$this->session->userdata('surname');?>"><i class="fas fa-user-alt"></i>
                <span><?=$this->lang->line('View profile');?></span></a>
              <a class="dropdown-item" href="<?=base_url('controler/profile_edit');?>/<?=$this->session->userdata('id');?>/<?=$this->session->userdata('name');?>/<?=$this->session->userdata('surname');?>"><i class="fas fa-cog"></i>
                <span><?=$this->lang->line('Edit profile');?></span></a>
              <a class="dropdown-item" href="<?=base_url('controler/profile_password');?>"><i class="fas fa-unlock"></i>
                <span><?=$this->lang->line('Change password');?></span></a>
              
              <a href="<?=base_url('controler/logout');?>" class="btn d-block text-left" style="color:white;"><i class="fas fa-power-off" ></i><?=$this->lang->line('Sign out');?></a>
              
            </div>
          </li>-->
        </ul>
      </nav>
    </div><!-- End top-bar -->

    <!-- =========== sidebar-left ============= -->
    <div class="sidebar-left" style="background-color: #0c2e3e;" >
      <div id="mtavari">
      <div class="sidebar-topbar text-center"  style="background-color: #0c2e3e;"  >
       <span class="text" style="color: #44cc5b;">BESTBUILDING</span>
      </div> <!-- End sidebar-topbar -->
      </div>
      <!-- End sidebar-topbar -->

      <div class="side-menu">
        <ul class="navbar-nav">
            
          <li class="nav-item" id="dashboard-link">
            <a href="<?=base_url('controler/problems_all');?>" class="items-list first">
              <span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
                  title="Dashboard"></i></span>
              <span class="items-list-text">ობიექტების უსაფრთხოება</span>
            </a>
          </li>
          
        </ul>
      </div><!-- End side-menu --> 
      <div class="side-bar-bottom" style="background-color: #153f53;">
        <ul class="list-unstyled">
         
          <li class="list-inline-item" data-toggle="tooltip" data-html="true"  title="<?=$this->lang->line('Sign out');?>">
            <a href="<?=base_url('controler/logout');?>" ><i class="fas fa-power-off"></i></a></li>
        </ul>
      </div><!-- End side-bar-bottom -->
    </div><!-- End sidebar-left -->
