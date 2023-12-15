<style>
    p{
        margin-bottom:0;
        font-weight:bold;
        margin-left:5px;
        color: #f1d766;
    }
    .mapp
    {
        width:80%;
        height:500px;
        margin:auto;
        margin-bottom:50px;
    }
    .rightt
    {
        width:49%; float:left;border-left:6px;  border-left-style: solid;  border-left-color: #efb111;margin-right:0.5%;
    }
    .leftt
    {
        width:50%; ;float:left;
    }
    @media (max-width: 991px)
  {
          
          .contact_info
          {
              width:100%;
            
              text-align:center;
              height: ;
              height: 250px;
              margin-bottom:300px;
          }
          .con_map
          {
              width:90%;
              margin:auto;
              height:350px;
          }
          footer
          {
              margin-top:170px;
          }
          .mapp
          {
              width:90%!important;
              height: 350px;
              margin:auto;
          }
          .rightt, .leftt
          {
              width:90%;
              float:right;
              margin-left:0;
              margin-bottom:60px;
              border-left: 6px;
              border-left-style: solid;
              border-left-color: #efb111;
          }
 }
 
</style>
<?php echo $map['js']; ?>
<div  class="mapp">

   
    <?php echo $map['html']; ?>
       <div style="margin-top:50px;margin-left:0;">
         
        <div class="rightt">
             <p style=" font-size:20px;"> სამუშაო საათები:</p>

       <p style=" font-size:17px; "> ორშაბათი-პარასკევი 10:00 - 18:00 </p>
       
        <p style=" font-size:17px; "> შაბათი 10:00 - 14:00 </p>
        
        <p style=" font-size:17px; "> კვირა არასამუშაო დღე. </p>
        
          </div>
        <div class="leftt" >
             <p style=" font-size:20px;"> <?=$this->lang->line('Address');?>:</p>

    <p style=" font-size:17px;">  ქალაქი ბათუმი,  ჭავჭავაძის ქ. <font style="font-size:14:px;"> 78/8 </font> ბინა <font style="font-size: 14:px;"> 6 </font></p>
    
          </div>
   </div>

    </div>
