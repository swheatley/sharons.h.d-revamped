<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
