<?php
/*
 * Template Name: Search Page Template
 * Description: This is a WordPress page template used for including a basic search field immediately above any page's content.
 * The code snippet comes directly from the WordPress Codex online documentation for "Creating a Search Page"
 * See wordpress.org/support/article/creating-a-search-page/
 */
?>

<?php get_header(); ?>

<div class="content">

	<article class="post single entry">
	
		<div class="post-inner section-inner thin">
		                
		<header class="post-header">
			<h2 class="post-title"><?php the_title(); ?></h2>
		</header><!-- .post-header -->
	                                                	            
        <div class="post-content entry-content">
            
            <?php get_search_form(); ?>
            
        </div><!-- .post-content -->
        	            	                        	
	</article><!-- .post -->
	
</div><!-- .content -->

<?php get_footer(); ?>
