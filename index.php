<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Oceanfinvest 1.0
 */

get_header();
?>
<section id="calheader">
 <div class="container">
    <div class="mobAccount" data-aos="zoom-in">
     <p><h2 class="headertxt text-center">Blog</h2></p>
     <p class="headertxt text-center">Home > Blog </p>
    </div>
 </div>
</section>
<section id="blogs-section">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="row">
<?php if ( have_posts() ) {
while ( have_posts() ) { the_post(); ?>
              
<div class="col-md-4 col-sm-12 mt-0 mt-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
   <div class="blog-box">
      <div class="blogImg" style="background: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>);"></div>
      <div class="blogDetail">
         <div class="blogTitle">
            <?php echo get_the_title();?> 
         </div>
         
         <p><?php echo get_the_excerpt();?></p>
         <div class="blog-author">
            <div class="blog-logo">
               <a href="javascript:;">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/image/ocean-logo.svg" alt="">
               </a>
               <span><?php echo CFS()->get( 'author_name' );?></span>
            </div>
            <div class="blog-date">
               <i class="calendar-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/calendar-new.svg"></i>
               <span><?php echo get_the_date('F d, Y h:i a'); ?></span>
            </div>
         </div>
         <div class="buttondiv text-center">
            <a href="<?php echo get_the_permalink();?>" class="blogbutton">Read More</a>
         </div>
      </div>
   </div>
</div>

<?php } } ?>
<?php get_template_part( 'template-parts/pagination' ); ?>


          </div>
  </div>
</section>
<?php
get_footer();
