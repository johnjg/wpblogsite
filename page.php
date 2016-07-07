<?php get_header(); ?>
<section class="row">
    <!-- BEGIN SIDEBAR -->
    <div class="four columns sidebarstyle">
        <?php get_sidebar(); ?>
    </div>
    <!-- END SIDEBAR -->

    <div class="row">
        <div class="eight columns pagestyle">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
    </div>
    
</section>
<?php get_footer(); ?>
