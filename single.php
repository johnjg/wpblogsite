<?php get_header(); ?>
    <div class="row">
        <div class="twelve columns pagestyle">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                { ?>
                <?php } ?>
                    <h2 class="posttitle"><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
