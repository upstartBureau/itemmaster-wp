<?php get_header(); ?>

  <section id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="content">
        <div class="row">
          <div class="two-col ghost">

            <?php the_field( 'contact_form' ); ?>

          </div>
          <div class="two-col ghost">

            <?php the_field( 'contact_information' ); ?>

          </div>
        </div>
      </section>

    <?php endwhile; endif; ?>

  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
