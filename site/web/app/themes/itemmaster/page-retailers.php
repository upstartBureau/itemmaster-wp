<?php get_header(); ?>

  <section id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="content bg-image retailers">
        <div class="row">
          <div class="col ghost">
            <?php the_field( 'hero_section' ); ?>
          </div>
        </div>
      </section>
      <section id="carousel" class="content logo-carousel">
        <?php the_field( 'carousel_headline' ); ?>
        <?php the_field( 'carousel' ); ?>
      </section>
      <section class="content on-demand">
        <div class="cloud-illustration">
          <div class="narrow-blurb">
            <?php the_field( 'ondemand_cloud' ); ?>
          </div>
        </div>
      </section>
      <section class="content shopping-experience">
        <div class="row">
          <div class="data-rich_wrapper">
            <?php the_field( 'summary_cta' ); ?>

          </div>
          <div class="partner_wrapper">
          <?php the_field( 'partner_section' ); ?>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

  </section>

<?php get_footer(); ?>
