<?php
/**
 * Template Name: Search Page Template
 * Description: This is a WordPress page template used for including a basic search field immediately above any page's content.
 * The code snippet comes directly from the WordPress Codex online documentation for "Creating a Search Page"
 * See wordpress.org/support/article/creating-a-search-page/
 */


?>
<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); 
