<?php /* Template Name: Home */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="people-content" role="main">
        <div id="homeWrap">
            <?php query_posts('p=48'); ?>
            <?php $url=wp_get_attachment_url(get_post_thumbnail_id(48)); ?>
            <section id="home-img">
                <?php echo do_shortcode('[np-shortcode]'); ?>
                <div class="slogan">
                    <div class="title">
                        <h1><span>Transforming Pain</span></h1>
                    </div>
                    <p>We are a research group and lab. We invent systems for the mind and body to help transform the lives of people who live in persistent pain.</p>
                </div>
            <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
            </section>
            <?php endwhile; endif; wp_reset_query(); ?>
            <div class="fill"></div>
            <section id="home-subgroup">
                <?php query_posts( 'p=54'); ?>
                <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                <a href="about">
                    <article class="cta x1">
                        <?php $subImg1=wp_get_attachment_url( get_post_thumbnail_id(54) ); ?>
                        <div class="img-crop" style="background:url('<?php echo $subImg1 ?>');"></div>
                            <div class="content">
                                <h2><?php echo get_the_title() ?></h2>
                                <p>
                                    <?php echo get_the_content() ?>
                                </p>
                            </div>
                    </article>
                </a>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php query_posts( 'p=56'); ?>
                <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                <a href="people">
                    <article class="cta x2">
                        <?php $subImg2=wp_get_attachment_url( get_post_thumbnail_id(56) ); ?>
                        <div class="img-crop" style="background:url('<?php echo $subImg2 ?>');"></div>
                            <div class="content">
                                <h2><?php echo get_the_title() ?></h2>
                                <p>
                                    <?php echo get_the_content() ?>
                                </p>
                            </div>
                    </article>
                </a>
                <?php endwhile; endif; wp_reset_query(); ?>
                <?php query_posts( 'p=58'); ?>
                <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                <a href="projects">
                    <article class="cta x3">
                        <?php $subImg3=wp_get_attachment_url( get_post_thumbnail_id(58) ); ?>
                        <div class="img-crop" style="background:url('<?php echo $subImg3 ?>');"></div>
                            <div class="content">
                                <h2><?php echo get_the_title() ?></h2>
                                <p>
                                    <?php echo get_the_content() ?>
                                </p>
                            </div>
                    </article>
                </a>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>
        </div>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>