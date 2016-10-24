<?php get_header(); ?>

  <section id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="content bg-image brands">
      <div class="row">
        <div class="col ghost">
          <div class="brands-wrapper">
            <?php the_field( 'brand_hero' ); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="content brand-activation">
      <div class="row brand-activation-tab">
        <?php the_field( 'brand_activation' ); ?>
      </div>
    </section>

    <section class="row quote">
      <div class="quote-wrapper">
        <?php the_field('gray_quote'); ?>
      </div>
    </section>

    <section class="content smart_label">
      <div class="row">
        <?php the_field( 'smart_label_ready' ); ?>
      </div>
    </section>

    <section class="content bg-image future-proof">
      <div class="row">
        <?php the_field( 'future_proof_content' ); ?>
      </div>
    </section>

    <section class="content facts">
      <div class="row fact-tab">
        <?php the_field( 'bullet_points' ); ?>
        <?php the_field( 'ready_cta' ); ?>
      </div>
    </section>

    <?php endwhile; endif; ?>

  </section>

<?php get_footer(); ?>
