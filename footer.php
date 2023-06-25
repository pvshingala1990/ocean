<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Oceanfinvest 1.0
 */

?>
<footer>
   <div class="container">
      <!-- <div class="subscribeDiv">
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Your E-mail">
            <button type="submit" class="subscribeBtn">Subscibe</button>
         </div>
      </div> -->
      <ul class="footerLink">
         <li class="mt-0">
            <div class="addressCol">
               <a href="https://oceanfinvest.in/" class="footerLogo"><img src="<?php echo ot_get_option('footer_logo');?>" width=80%></a>
               <address>
               <?php echo ot_get_option('address');?>
               </address>
            </div>
            <div class="socilaLink">
               <a href="<?php echo ot_get_option('facebook');?>"><i class="bi bi-facebook"></i></a>
               <a href="<?php echo ot_get_option('linked_in');?>"><i class="bi bi-linkedin"></i></a>
               <a href="<?php echo ot_get_option('youtube');?>"><i class="bi bi-youtube"></i></a>
               <a href="mailto:<?php echo ot_get_option('email');?>" target="_blank"><i class="bi bi-envelope-fill"></i></a>
               <a href="<?php echo ot_get_option('twitter');?>"><i class="bi bi-twitter"></i></a>
               <a href="<?php echo ot_get_option('instagram');?>"><i class="bi bi-instagram"></i></a>
              
            </div>
         </li>
         <li>
         <?php 					
					$menu_name = 'footerone';
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );					
					?>
            <h4><?php echo $menu->name;?></h4>
            <ul class="sublink">
                        <?php foreach ($menuitems as $key => $value) {									
									?>
									<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
								<?php }?>  
            </ul>
         </li>
         <li>
         <?php 					
					$menu_name = 'footertwo';
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );					
					?>
            <h4><?php echo $menu->name;?></h4>
            <ul class="sublink">
           
            <?php foreach ($menuitems as $key => $value) {									
									?>
									<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
								<?php }?>  
            </ul>
         </li>
         <li>
         <?php 					
					$menu_name = 'footerthree';
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );					
					?>
            <h4><?php echo $menu->name;?></h4>
            <ul class="sublink">
            <?php foreach ($menuitems as $key => $value) {									
									?>
									<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
								<?php }?>  
            </ul>
         </li>
         <li>
         <?php 					
					$menu_name = 'footerfour';
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );					
					?>
            <h4><?php echo $menu->name;?></h4>
            <ul class="sublink">
            <?php foreach ($menuitems as $key => $value) {									
									?>
									<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
								<?php }?>  
            </ul>
         </li>
      </ul>
      <?php echo ot_get_option('footer_content');?>
   </div>
   <div class="copyright">
   <?php echo ot_get_option('copyright');?>
   </div>
</footer>
<!-- Footer End -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.js"></script>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Sticky Header -->
<script>
   window.onscroll = function() {myFunction()};
   
   var header = document.getElementById("myHeader");
   var sticky = header.offsetTop;
   
   function myFunction() {
     if (window.pageYOffset > sticky) {
       header.classList.add("sticky");
     } else {
       header.classList.remove("sticky");
     }
   }
</script>
<!-- Counter Js -->

<!-- counter js End -->

<!-- Animation Js -->
<script>
   AOS.init({
   duration: 1200,
   })
   
</script>


		<?php wp_footer(); ?>

	</body>
</html>
