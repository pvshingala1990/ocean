<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Oceanfinvest 1.0
 */

get_header();
?>
<style type="text/css">
  #blogs-section p span{
    font-size: 17px !important;
  }
</style>
<section id="calheader">
 <div class="container">
    <div class="mobAccount" data-aos="zoom-in">
     <p><h2 class="headertxt text-center">Blog Detail</h2></p>
     <p class="headertxt text-center">Home > Blog > Blog Detail</p>
    </div>
 </div>
</section>

<section id="blogs-section" class="blogDetailScreen">
  <div class="container " data-aos="fade-up">
          <div class="row">
        <div class="col-md-8">
          <div>
		  <?php $url= get_the_post_thumbnail_url( get_the_ID(), 'full' );?>
		  <img src="<?php echo  $url;?>">
          </div>
          <ul class="blog-d-author aos-init" data-aos="fade-down">
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/calendar-icon-new.svg"> <?php echo get_the_date('F d, Y'); ?>              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/user.svg"> <?php echo CFS()->get( 'author_name' );?>              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/comments.svg"> Comments
              </a>
            </li>
          </ul>
          <h1 class="blogTitle aos-init" data-aos="fade-down"><?php the_title(); ?></h1>
          <?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}
?>
          
          
        </div>
        <div class="col-md-4">
          <div class="blog-detail-right">
            <div class="blog-search-area">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <div class="blog-search">
              
                  <input type="text" name="s" placeholder="Searching..." class="form-control" spellcheck="false" data-ms-editor="true">
                  <button><i class="fa fa-search" aria-hidden="true"></i></button>
                  
                </div>
                </form>
            </div>
                        <div class="blog-right-box recent-posts">
              <h3 class="blog-right-title">Recent Posts</h3>
              <ul>
              
              <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' =>5, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach( $recent_posts as $post_item ) :
    
       $url= get_the_post_thumbnail_url( $post_item['ID'], 'full' );?>
                                 
                                                      
                                                      <li>
                    <?php if($url){?>
                    <div class="recent-post-img">
                      <img src="<?php echo $url;?>" alt="">
                    </div>
                    <?php } ?>
                    <div class="recent-detail">
                      <h4><a href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a></h4>
                      <div class="post-date"><img src="https://oceanfinvest.in/assets/image/calendar-icon-new.svg" alt=""> <?php echo get_the_date('F d, Y',$post_item['ID']); ?></div>
                    </div>
                  </li>
                  <?php endforeach; ?>
                              </ul>
            </div>
                        <div class="blog-right-box blog-right-links">
              <h3 class="blog-right-title">Categories</h3>
              <ul>
                <?php
                $args = array(
                  'hide_empty'      => false,
              );
                $categories = get_categories($args);
                foreach($categories as $category) {
                ?>
                <li>
                  <a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a>
                </li>
                <?php } ?>
              </ul>
            </div>
            <?php 					
					$menu_name = 'sidebar';
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($locations[ $menu_name ] );
					$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );					
					?>
            <div class="blog-right-box blog-right-links">
              <h3 class="blog-right-title"><?php echo $menu->name;?></h3>
              <ul>
              <?php foreach ($menuitems as $key => $value) {									
									?>
									<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
								<?php } ?>  
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
</section>


<?php get_footer(); ?>
