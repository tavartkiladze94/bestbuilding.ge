
<footer class="site-footer bg-dark" role="contentinfo" style="background-color: #373334!important;  ">
    <div style="width:100%;margin:auto;text-align:center;"><h2 style="color:#f1d766;font-weight:bold; font-size:26px;"><?=$this->lang->line('Contact us');?></h2></div>
    <div style="width:100%;margin:auto;text-align:center; margin-bottom:0;">
       <div class="contact_infoo" ><h3 style="color:#f1d766; font-size:23px;"><i class="fa fa-envelope"></i> info@bestbuilding.ge</h3></div>
        <div class="contact_infoo" >
<h3 style="color:#f1d766; font-size:23px;font-family: Grigolia;"><i class="fa fa-phone" aria-hidden="true"></i> (+995 557 62 60 91)</h3></div> 
       <div class="contact_infoo" style="margin-bottom: 2px;">
           <a href="https://www.facebook.com/Bestbuilding-248297045870041/" target="blank" ><img src="<?=base_url();?>assets/images/ff.png" style="width:35px; margin-left:3px;"></a> 
           <a href="https://msng.link/o/?995558101199=vi" ><img src="<?=base_url();?>assets/images/viber.png" style="width:35px; margin-left:3px; "></a>
          <a href="https://msng.link/o/?995558101199=wa" ><img src="<?=base_url();?>assets/images/watsapp.png" style="width:35px;margin-left:3px; "></a>
       </div> 
       
</div>
 
</footer>


<script src="<?=base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url();?>assets/js/popper.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?=base_url();?>assets/js/main.js"></script>
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "109347001794521");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/<?=$this->lang->line('en_US');?>/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

</body>
</html>