<?php get_header(); ?>

<section class="row">

    <!-- Begin Sidebar -->
    <div class="four columns sidebarstyle">
        <?php get_sidebar(); ?>
    </div>
    <!-- End sidebar -->

    <div class="eight columns sectionsstyle">
        <!-- Begin Slider -->
        <section>
            <ul class="bxslider">
                <li><img src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/img/pic1.jpg" /></li>
                <li><img src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/img/pic2.jpg" /></li>
                <li><img src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/img/pic3.jpg" /></li>
                <li><img src="http://www.johnjg.com/wordpress/wp-content/themes/blank-template-johngotschall/img/pic4.jpg" /></li>
            </ul>
        </section>
        <!-- End Slider -->

        <!-- Begin Posts -->
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();?>
                <!-- Breaks the Loop to display only one post -->
                <?php if (++$count > 1) break; ?>
                <!-- ADD LINK TO THE TITLE -->
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <h4>Author: <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <a class="comments-ref" href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?> Comments</a></h4>
                <div class="thumbnail"><?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                }
                ?>
                </div>
            <?php the_content_rss('', TRUE, '', 35); ?>

            <div id="readmorebutton">
                <a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
        <?php } // end while
                } // end if
        ?>
    </div>
</section>
<?php get_footer(); ?>
