<?php get_header(); ?>
<div id="content">

  <!-- Add any template tags outside of loop -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Add any post template tags inside of loop -->

  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>

  <?php endwhile; else: ?>

  <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
  <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

  <?php endif; ?>

  <!-- Add any template tags outside of loop -->

</div>

<?php get_footer() ?>