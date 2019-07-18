<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre<span> gdlwebcamp</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend. ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend.</p>
    </div>
    <div class="ultimos-tweets">
     <h3>Ultimos<span> tweets</span></h3>
     <li>elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend.</li>
     <li>elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend.</li>
     <li>elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend.</li>
    </div>
    <div class="menu">
      <h3>Redes<span> sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">
    Todos los derechos reservados 2018.
  </p>


    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
    	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <div style="display:none;">
    <div id="mc_embed_signup">
    <form action="https://website.us19.list-manage.com/subscribe/post?u=3875a537c0a1f4bbc705c59b3&amp;id=21ef58f67d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
    	<h2 class="blanco">Suscribete y no te pierdas nada de este evento</h2>
    <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
    <div class="mc-field-group">
    	<label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
    </label>
    	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>
    	<div id="mce-responses" class="clear">
    		<div class="response" id="mce-error-response" style="display:none"></div>
    		<div class="response" id="mce-success-response" style="display:none"></div>
    	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3875a537c0a1f4bbc705c59b3_21ef58f67d" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
    </div>
  </div><!--style display:none-->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
</footer>

 <script src="js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
 <script src="js/plugins.js"></script>
 <script src="js/jquery.animateNumber.min.js"></script>
 <script src="js/jquery.countdown.js"></script>
 <script src="js/jquery.lettering.js"></script>
 <?php
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php","",$archivo);//3parametros->(loquequierebuscar,reeemplazo,fuentedatos)
   if ($pagina == 'invitados' || $pagina == 'index') {
     echo '<script src="js/jquery.colorbox.js"></script>';
   }else if($pagina == 'conferencia'){
     echo '<script src="js/lightbox.js"></script>';
   }
 ?>


 <script src="js/main.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNgrzNFAYgSIjySBVmVnjUnAzCPNEasqs&callback=initMap"
 async defer></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true,  isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"3875a537c0a1f4bbc705c59b3","lid":"21ef58f67d"}) })</script>
 <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
 <script>
     window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
     ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
 </script>
 <script src="https://www.google-analytics.com/analytics.js" async defer></script>



</body>

</html>
