<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


$(document).ready(function(){
  
$("#migebuli_pasuxi").click(function(){
      $("#axali_shetyobineba_forma").toggle();
      document.getElementById("mimgebi").value="<?php echo $brigadiri_sms_details['reg_name'].'-'.$brigadiri_sms_details['reg_surname'];?>";
      var mimg = document.getElementById("mimgebi");
      var id = $(mimg).children(":selected").attr("id");
  document.getElementById("email").value = id;
  });
});


</script>

<div class="email-app-list">
  <div class="app-fixed-search d-flex align-items-center">
    <div class="sidebar-toggle d-block d-lg-none ms-1">
<font style="font-size:18px;">მენიუ</font> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu font-medium-5" style="color:black;"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    </div>
  </div>
   <div class="app-action">
    <div class="action-left">
      <div class="form-check selectAll">
        
        <label class="form-check-label fw-bolder ps-25" style="font-size:16px;"><b><?php echo $brigadiri_sms_details['reg_name'].' '.$brigadiri_sms_details['reg_surname'];?></b></label>
        <p style="font-size;14px;"><?php echo $brigadiri_sms_details['date'];?></p>
        
      </div>
    </div>
    </div>
  <!-- Email list starts -->
  <div class="email-user-list ps ps--active-y">
   <div class="card-body mail-message-wrapper pt-2">
            <div class="mail-message">
             
              <p class="card-text">
               <?php echo $brigadiri_sms_details['text'];?>
              </p>
            </div>
          </div>
         
          &#160 <p style="margin-left:3px; font-size:16px;">მიბმული ფაილები: </p>
          <?php if (!empty($migebuli_files)) foreach ($migebuli_files as $files_item): ?>
           <div style="width:100%; min-height: 70px;">
             <div style="width:75px; "> <img style="border-radius: 0; width:70px; height:40px; float:left; " src="<?=base_url();?>assets/images/<?php if($files_item['file_ext'] == '.jpg' || $files_item['file_ext']== '.jpeg' || $files_item['file_ext']=='.png') echo 'brigadiri/'.$files_item['file_name']; else{ echo strtolower($files_item['file_ext']).'.png';} ?>" alt="">
             </div>
                       <div> <h5 class="mb-25" style="color:black; margin-left:10px;"><a target="_blank" href="<?=base_url();?>assets/images/brigadiri/<?php echo $files_item['file_name']; ?>"><b style="margin-left:3px;"><?php echo $files_item['file_name']; ?></a> - <a href="<?=base_url();?>assets/images/brigadiri/<?php echo $files_item['file_name']; ?>" download style="background-color:#7367F0!important; ">ჩამოტვირთვა</a> </b></h5>  
            </div>
            </div>
          <?php endforeach; ?>
       <br>
 <div style="width:100;"><button  class="compose-email btn btn-primary w-100 waves-effect waves-float waves-light" style="max-width:150px;" id="migebuli_pasuxi">პასუხი</button></div>
 
      
          </div>
  <!-- Email list ends -->
</div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->

