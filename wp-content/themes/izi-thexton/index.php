<?php get_header(); ?>
<?php component('global/nav') ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main class="izi">
    <?php the_content(); ?>
  </main>
<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>