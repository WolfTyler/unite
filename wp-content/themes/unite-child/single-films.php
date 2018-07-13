<?php

/*Template Name: Films*/

get_header(); ?>

    <div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>

            <ul>
            <?php 
            ;

            echo '<p>Ticket Price: '.do_shortcode('[acf field="ticket_price"]').'</p>';
            echo 'Release Date: '.do_shortcode('[acf field="release_date"]');

            $items = ['actors', 'genre'];

            foreach($items as $item){

            echo '<h5>'.ucfirst($item).":</h5>";

            $categories = get_the_terms( $post->ID , $item);

            if(has_term('',$item))
            {
            foreach ( $categories as $category ) {

            echo '<li>'.$category->name.'</li>';


            }
        }
            }
            ?>
            </ul>

            <?php unite_post_nav(); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>