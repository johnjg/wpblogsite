<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="twelve columns pagestyle">
        <?php if ( have_posts() ) : ?>
            <h1 class="thesearchtitle">Archives</h1>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_excerpt(); ?>
                <div id="readmorebutton">
                    <a href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
