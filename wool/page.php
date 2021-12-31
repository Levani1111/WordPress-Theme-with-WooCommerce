<?php get_header(); ?>


<div class="content">
    <div class="container">
        <img src="<?php the_post_thumbnail_url('post_imge'); ?>" class="img-fluid mb-5" alt="">
        <h1><?php the_title();?></h1>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: endif; ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
    </div>
</div>

<?php get_footer(); ?>