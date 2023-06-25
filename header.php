<?php
/**
 * Header file for the Oceanfinvest WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Oceanfinvest 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
      <!-- ====== -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/calc.css">
      <!-- ===== -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/icofont/icofont.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css">
     
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-icons.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Owl Stylesheets -->
      <!-- Favicon -->
      <link rel="icon" href="<?php echo ot_get_option('favicon');?>" type="image/x-icon">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

	      <!-- ======= Header ======= -->
		  <header id="myHeader" class=" fixed-top">
         <div class="topbarheader">
            <div class="container">
               <div class="socilaLink">
               <a href="<?php echo ot_get_option('facebook');?>"><i class="bi bi-facebook"></i></a>
               <a href="<?php echo ot_get_option('linked_in');?>"><i class="bi bi-linkedin"></i></a>
               <a href="<?php echo ot_get_option('youtube');?>"><i class="bi bi-youtube"></i></a>
               <a href="mailto:<?php echo ot_get_option('email');?>" target="_blank"><i class="bi bi-envelope-fill"></i></a>
               <a href="<?php echo ot_get_option('twitter');?>"><i class="bi bi-twitter"></i></a>
               <a href="<?php echo ot_get_option('instagram');?>"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="search d-lg-none d-inline-block smlsrch">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                     </svg>
                  </a>
               </div>
            </div>
         </div>

         <div class="container ">
            <div class="row justify-content-center">
               <div class="col-xl-12 d-flex align-items-lg-center">
                  <div class="logo mr-auto">
                     <a href="https://oceanfinvest.in/"><img src="<?php echo ot_get_option('logo');?>" width=100%></a>
                  </div>
                  <button class="navbar-toggler d-lg-none " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/justify.svg">
                     </span>
                  </button>
                  <?php 					
							$menu_name = 'primary';
							$locations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
							$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                     $menu = array();
                            foreach ($menuitems as $m) {
                                if (empty($m->menu_item_parent)) {
                                    $menu[$m->ID] = array();
                                    $menu[$m->ID]['ID']      =   $m->ID;
                                    $menu[$m->ID]['title']       =   $m->title;
                                    $menu[$m->ID]['url']         =   $m->url;
                                    $menu[$m->ID]['children']    =   array();
                                    $menu[$m->ID]['top']    =   1;
                                }
                            }
                            $submenu = array();
                            foreach ($menuitems as $m) {
                                if ($m->menu_item_parent) {
                                    $submenu[$m->ID] = array();
                                    $submenu[$m->ID]['ID']       =   $m->ID;
                                    $submenu[$m->ID]['title']    =   $m->title;
                                    $submenu[$m->ID]['url']  =   $m->url;
                                    $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
                                }
                            }	
                            
                            
						?>
                  <nav class="navbar navbar-expand-lg">
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <nav class="nav-menu navbar navbar-expand-lg navbar-light bg-white">
                           <ul class="d-lg-flex d-block">
                              <?php 
                              foreach ($menu as $key => $value) {
                                 if(empty($value['children'])){
                              ?>
                              <li><a href="<?php echo $value['url']; ?>" class="cool-link"><?php echo $value['title']; ?></a></li>
                              <?php }else{ ?>
                              <li class="nav-item d-lg-inline-block d-none"><a href="<?php echo $value['url']; ?>" class="cool-link"><?php echo $value['title']; ?></a>
                                 <ul class="dropdown-menu">
                                 <?php foreach ($value['children'] as $ckey => $childrenvalue) {?>
                                   <li><a class="dropdown-item" href="<?php echo $childrenvalue['url'];?>"><?php echo $childrenvalue['title'];?></a></li>
                                   <?php } ?>  
                                 </ul>
                              </li>
                              <li class="d-lg-none d-block">
                                 <div class="dropdown smld">
                                    <button class="btn d-block dropdown-toggle mx-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" 
                                    aria-haspopup="true" aria-expanded="false"><?php echo $value['title']; ?></button>
                                    <div class="dropdown-menu pro" aria-labelledby="dropdownMenuButton">
                                    <?php foreach ($value['children'] as $ckey => $childrenvalue) { ?>
                                       <a class="dropdown-item" href="<?php echo $childrenvalue['url'];?>"><?php echo $childrenvalue['title'];?></a>
                                    <?php } ?>     
                                    </div>
                                 </div>
                              </li>
                              <?php } ?>
                              
                              

                            
                              
                              <?php } ?>   
                              <div class="dropdown show d-lg-none d-block m-0">
                                
                                 <div class="dropdown-menu show" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item smld" href="https://oceanfinvest.in/download-forms">Download Forms</a>
                                    <a class="dropdown-item smld" href="<?php echo site_url();?>">Blog</a>
                                    <div class="dropdown smld d-lg-none d-block">
                                       <a class="dropdownbtn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download App</a>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="https://apps.apple.com/in/app/ocean-finvest/id1152854908">IOS</a>
                                          <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=tvs.mob.excelnet.oceanfinvest">Android</a>
                                       </div>
                                    </div>
                                    <div class="yellow-btn mr41 signIn d-lg-none d-block">
                                       <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"><i class="bi bi-person-fill"></i> Login</a>
                                    </div>
                                 </div>
                              </div>
                           </ul>
                        </nav>
                     </div>
                  </nav>
                  
                  <!-- .nav-menu -->
                  <div class="search d-lg-inline-block d-none">
                     <a href="https://support.oceanfinvest.in" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/technical-support.svg" style='height: 30px'></a>
                  </div>
                  <div class="dropdown show d-lg-inline-block d-none">
                     <a class=" dropdown-toggle hamicon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/justify.svg">
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        
                        <li class="submenu">
                           <a class="dropdown-item smld" href="https://oceanfinvest.in/download-forms">Download Forms</a>
                        </li>
                        <a class="dropdown-item" href="<?php echo site_url(); ?>">Blog</a>
                        <div class="dropdown show d-lg-none d-block">
                           <a class="dropdownbtn dropdown-toggle " href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download App</a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="https://apps.apple.com/in/app/ocean-finvest/id1152854908">IOS</a>
                              <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=tvs.mob.excelnet.oceanfinvest">Android</a>
                           </div>
                        </div>
                     </div>
                     <div class="yellow-btn mr41 signIn d-lg-none d-block">
                        <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"><i class="bi bi-person-fill"></i> Login</a>
                     </div>
                  </div>
                  <div class="dropdown show d-lg-inline-block d-none">
                     <a class="dropdownbtn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download App</a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="https://apps.apple.com/in/app/ocean-finvest/id1152854908">IOS</a>
                        <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=tvs.mob.excelnet.oceanfinvest">Android</a>
                     </div>
                  </div>
                  <div class="yellow-btn mr41 signIn d-lg-inline-block d-none">
                     <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"><i class="bi bi-person-fill"></i> Login</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- End Header -->

<style>
   @media all and (min-width: 992px) {
   .navbar .nav-item .dropdown-menu{ display: none; }
   .navbar .nav-item:hover .nav-link{  }
   .navbar .nav-item:hover .dropdown-menu{ display: block; }
   .navbar .nav-item .dropdown-menu{ margin-top:0; }
}
</style>
<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function(){
      // make it as accordion for smaller screens
      if (window.innerWidth > 992) {

         document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

            everyitem.addEventListener('mouseover', function(e){

               let el_link = this.querySelector('a[data-bs-toggle]');

               if(el_link != null){
                  let nextEl = el_link.nextElementSibling;
                  el_link.classList.add('show');
                  nextEl.classList.add('show');
               }
            });
            everyitem.addEventListener('mouseleave', function(e){
               let el_link = this.querySelector('a[data-bs-toggle]');

               if(el_link != null){
                  let nextEl = el_link.nextElementSibling;
                  el_link.classList.remove('show');
                  nextEl.classList.remove('show');
               }
            })
         });
      }
      // end if innerWidth
   }); 
</script>
