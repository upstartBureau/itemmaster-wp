<?php get_header(); ?>

  <section id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="content">

        <div class="row">

          <?php the_content(); ?>

        </div>

      </section>

    <?php endwhile; endif; ?>

  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
