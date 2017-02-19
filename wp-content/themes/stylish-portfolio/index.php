<?php get_header(); ?>
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();

              get_template_part( 'content', get_post_format() );
            endwhile; endif;
            ?>
            </div>
        </div>
	<?php get_sidebar(); ?>
  </div>
</section>

<?php get_footer(); ?>
