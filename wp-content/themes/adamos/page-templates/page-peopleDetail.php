<?php /* Template Name: PeopleDetail */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="people-content" role="main">
        <section class="people-detail">
            <?php query_posts( '&page_id='. get_the_ID()); ?>
            <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <div class="peopleDetailBG">
                <div class="thumbnail parallaxContainer" id="fimg-<?php the_ID(); ?>" style="background:url(<?php echo $featuredImage; ?>) no-repeat scroll;">
            </div>
            <h2><?php echo get_the_title() ?></h2>
            <article>
                <?php echo get_the_content() ?>
            </article>
            <?php endwhile; endif; wp_reset_query(); ?>
        </section>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/parallax.js"></script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>