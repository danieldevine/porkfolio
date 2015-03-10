<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    footer.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/footer.php
  */
?>

<footer>
   <div class="footer-inner">
      <a href="#" class="more">© DANIEL DEVINE <?php echo date( "Y") ?></a>
   </div>
</footer>

<script>jQuery('#slides').superslides()</script>
<script>jQuery('#statics').superstatics()</script>


<script>  jQuery(".responsive_headline").fitText(1.2, { minFontSize: '20px', maxFontSize: '90px' })</script>
<script>  jQuery(".unresponsive_headline").fitText(1.2, { minFontSize: '50px', maxFontSize: '90px' })</script>
<script>  jQuery(".small-headline").fitText(1.2, { minFontSize: '20px', maxFontSize: '50px' })</script>

<?php wp_footer(); ?>

<script> var navigation = responsiveNav("#nave"); </script>

</body>
</html>
