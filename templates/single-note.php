<?php
/**
 * Template Name: Single Note
 *
 * Template Post Type: post
 *
 * for Single Notes
 *
 * @package Atomic Blocks
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-content">

        <header class="entry-header">
            <?php if( is_single() ) { ?>
                <h1 class="entry-title">
                    <?php the_title(); ?> IS THIS WORKING
                </h1>
            <?php } else { ?>
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>
            <?php } ?>

            <?php atomic_blocks_post_byline(); ?>
        </header>

        <?php atomic_blocks_post_media(); ?>

        <div class="entry-content">

            <h2>Overview</h2>
            <h3>Problem being solved and context</h3>
            <p><?php the_field( 'problem_context' ); ?></p>
            <hr>
            <h3>Programming languages or tech involved</h3>
            <p><?php the_field( 'base-language' ); ?></p>
            <p><?php the_field( 'difficulty_level' ); ?></p>
            <p><?php the_field( 'notes_about_difficulty_level' ); ?></p>
            <hr>
            <h3>Frameworks and plugins</h3>
            <p><?php the_field( 'frameworks' ); ?></p>
            <p><?php the_field( 'framework_plugins' ); ?></p>
            <p><?php the_field( 'notes_about_frameworks' ); ?></p>
            <hr>
            <h3>Developer tools used in this tutorial</h3>
            <p><?php the_field( 'developer_tools' ); ?></p>
            <p><?php the_field( 'notes_about_tools' ); ?></p>
            <hr>
            <h3>Other details</h3>
            <p><?php the_field( 'os_environment' ); ?></p>
            <ul><?php the_field( 'reference_links' ); ?></ul>
            <hr>

                <?php the_content(); ?>

            <?php
            // Remove Jetpack Sharing output
            if( ! is_single() ) {
                atomic_blocks_remove_sharing();
            }

            // If it's a video format, filter out the first embed and return the rest of the content
            if ( has_post_format( 'video' ) || has_post_format( 'gallery' ) ) {
                atomic_blocks_filtered_content();
            } else {
                the_content( esc_html__( 'Read More', 'atomic-blocks' ) );
            }

            // Post pagination links
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atomic-blocks' ),
                'after'  => '</div>',
            ) );

            if ( is_single()  ) {
                // Post meta sidebar
                get_template_part( 'template-parts/content-meta' );

                // Author profile box
                atomic_blocks_author_box();

                // Post navigations
                if( is_single() ) {
                    if( get_next_post() || get_previous_post() ) {
                        atomic_blocks_post_navs();
                } }

                // Comments template
                comments_template();
            } ?>
        </div><!-- .entry-content -->
    </div><!-- .post-content-->

</article><!-- #post-## -->


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>