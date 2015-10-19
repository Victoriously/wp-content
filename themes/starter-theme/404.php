<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Starter_Theme
 */

get_header(); ?>

<div class="container contentWithAside">
	<div id="primary" role="main"> 
	    <article id="post-0" class="post error404 not-found">
		    <header class="entry-header">
		        <h1 class="entry-title"><?php _e( 'Uh oh!', 'starter-theme' ); ?></h1>
		    </header>

		    <div class="entry-content">
		        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'starter-theme' ); ?></p>
		        <?php get_search_form(); ?>
		    </div><!-- .entry-content -->
		</article><!-- #post-0 -->
    </div><!-- / #primary -->

    <?php get_sidebar(); ?>
</div><!-- / .container -->   
   
<?php get_footer(); ?>