<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
     <?php the_title(); ?>
     <?php the_content(); ?>
<? endwhile; ?>

<?php get_footer(); ?>
