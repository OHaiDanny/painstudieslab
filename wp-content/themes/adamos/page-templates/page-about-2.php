<?php /* Template Name: About v2 */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="people-content" role="main">
        <div id="about">
            <section class="about-container">
                <?php query_posts( '&cat=6&order=asc'); ?>
                <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php $featuredImage=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                <div class="thumbnail featureImg parallaxContainer" id="fimg-<?php the_ID(); ?>" style="background:url(<?php echo $featuredImage; ?>) no-repeat; background-size:cover; background-position:right 0px;"></div>
                <article>
                    <h1 class="post-title entry-title">Pain Studies Lab</h1>
                    <div class="wrap">
                        <?php echo get_the_content() ?>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>
            <section id="brag-bar">
                <div class="wrap">
                    <h2>Pain Studies Lab was also featured in:</h2>
                    <ul>
                        <?php
                        $args = array('post_type' => 'attachment', 'cat' => 18);
                        $bragBoxPosts = get_posts($args);
                            
                        foreach ( $bragBoxPosts as $image ) : 
                            $url = wp_get_attachment_url($image->ID);
                            $link = $image->post_excerpt;
                            echo '<li><a href="'.$link.'" target="_blank"><img src="'.$url.'" /></a></li>';
                        ?>
                        <?php endforeach; 
                        wp_reset_postdata();?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/parallax.js"></script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>