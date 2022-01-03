<?php get_header(); ?>
<?php component('global/header') ?>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main class="">
    <?php the_content(); ?>
  </main>
<?php endwhile; else : ?>

<?php endif; ?>

<?php component('global/footer') ?>
<?php get_footer(); ?>