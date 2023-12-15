
<!DOCTYPE html>
<html  lang="en" >
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>სამართავი პანელი</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
   <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/swiper.min.css">
     <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/sweetalert2.min.css">
     <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/flatpickr.min.css">
    

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/form-flat-pickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/form-pickadate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/ext-component-swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/form-file-uploader.min.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/style.css">
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/form-file-uploader.min.css">
    <!-- END: Custom CSS-->
    <style>
     
    svg, .header-navbar .navbar-container ul.navbar-nav li i.ficon, .header-navbar .navbar-container ul.navbar-nav li svg.ficon, span
    {
      color:white;
    }
    .navigation-main .nav-item a span
    {
      color:white;
    }
    .feather .feather-file-text
    {
      color:white;
    }
    ::after{
      color:white;
    }
    .main-menu .navigation li.has-sub>a:after
    {
      background-image:url('<?=base_url();?>assets/images/icons/angle_down.png');
    }
    .main-menu.menu-light .navigation>li.open:not(.menu-item-closing)>a, .main-menu.menu-light .navigation>li.sidebar-group-active>a, .main-menu.menu-light .navigation>li ul .open>a
    {
      background-color:red;
    }
    
  </style>

  </head>
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow" style="background-color:#10163A; margin-top:0;">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
         
         
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
         <!-- <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"><?=$this->lang->line('lang');?></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="<?=base_url('patients/setLanguage/ge/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>" data-language="en"><i class="flag-icon flag-icon-us"></i> <?=$this->lang->line('Georgian');?></a>
              <a class="dropdown-item" href="<?=base_url('patients/setLanguage/ru/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>" data-language="fr"><i class="flag-icon flag-icon-fr"></i><?=$this->lang->line('Russian');?></a>
              <a class="dropdown-item" href="<?=base_url('patients/setLanguage/en/');?><?php echo $this->uri->segment(2); ?>/<?php if($this->uri->segment(3) !== FALSE) echo $this->uri->segment(3); ?>/<?php if($this->uri->segment(4) !== FALSE) echo $this->uri->segment(4); ?>/<?php if($this->uri->segment(5) !== FALSE) echo $this->uri->segment(5); ?>/<?php if($this->uri->segment(6) !== FALSE) echo $this->uri->segment(6); ?>/<?php if($this->uri->segment(7) !== FALSE) echo $this->uri->segment(7); ?>" data-language="de"><i class="flag-icon flag-icon-de"></i> <?=$this->lang->line('English');?></a></div>
          </li>-->
        
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?php echo $this->session->userdata('user');?></span><span class="user-status"><?php if($this->session->userdata('user') == 'lana') echo 'ადმინი'; else echo 'user';?></span></div><span class="avatar">>></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user" >
              <a class="dropdown-item" href="<?=base_url('patients/logout');?>"><i class="mr-50" data-feather="power"></i> <?=$this->lang->line('Sign out');?></a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  
 <!-- Begin Main Menu   style="background-color:#55b536;"-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" >
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url('patients/index');?>">
              <h2 class="brand-text" style="color:white;">ISHOVE.GE</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content" >
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
           <li class=" nav-item" <?php if($this->session->userdata('user') != 'lana') echo 'style="display:none;"'; ?>><a class="d-flex align-items-center" href="#" style="width:100%;" ><span class="menu-title text-truncate" data-i18n="Pages"> წელი </span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="<?=base_url('patients/year/2023');?>"><i data-feather="circle"></i><span class="menu-item text-truncate" >ბაზა - 2023</span></a>
               
              </li>
              <li><a class="d-flex align-items-center" href="<?=base_url('patients/year/2022');?>"><i data-feather="circle"></i><span class="menu-item text-truncate" >ბაზა - 2022</span></a>
               
              </li>
             
            </ul>
          </li>
          <li class=" nav-item" <?php if($this->session->userdata('user') != 'lana') echo 'style="display:none;"';?>><a class="d-flex align-items-center" href="<?=base_url('patients/list');?>" ><span class="menu-title text-truncate" >პაციენტები</span></a>
           
          </li>
         <li class=" nav-item" <?php if($this->session->userdata('user') != 'lana') echo 'style="display:none;"';?>><a class="d-flex align-items-center" href="<?=base_url('patients/forma_list');?>"><span class="menu-title text-truncate" >ფორმა 100 -<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?=base_url('patients/category_list/fsiqomaturi');?>"><span class="menu-title text-truncate" >ფსიქოსომატური -<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
          <li class=" nav-item" ><a class="d-flex align-items-center" href="<?=base_url('patients/category_list/mozrdili');?>"><span class="menu-title text-truncate" >მოზრდილი მოსახლეობა -<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
          <li class=" nav-item" ><a class="d-flex align-items-center" href="<?=base_url('patients/category_list/zvali');?>"><span class="menu-title text-truncate" >ძვალ-სახსროვანი-<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
           <li class=" nav-item" ><a class="d-flex align-items-center" href="<?=base_url('patients/category_list/municipaliteti');?>"><span class="menu-title text-truncate" >მუნიციპალიტეტი -<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?=base_url('patients/category_list/maia');?>"><span class="menu-title text-truncate" >მაია ბერიძე-<?php if($this->session->userdata('user') == 'lana') echo $this->session->userdata('year'); else echo '2023';?></span></a>
          </li>
       
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->