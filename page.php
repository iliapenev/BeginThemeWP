<?php
/*
  Template Name: Page
 */
?>

<?php get_header(); ?>

            <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="content-container">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
			
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        
<?php get_footer(); ?>