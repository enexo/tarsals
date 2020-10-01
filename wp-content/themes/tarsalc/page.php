<?php get_header();  ?>
    <section class="page-wrap">
    <div class="container">
        <h1><?php the_title();  ?></h1>
        <div class="row">
            <div class="col">
				<?php  get_template_part('includes/section', 'content'); ?>
            </div>
            <div class="col">
	            <?php if(has_post_thumbnail()):  ?>
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="<?php the_title();  ?>">
	            <?php endif;  ?>
            </div>
        </div>

    </div>
    </section>










<?php get_footer();  ?>