<?php /* Template Name: Project */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="project-content" role="main">
        <div id="project">
            <?php query_posts( '&cat=8&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <!-- <h1><?php single_cat_title() ?></h1> -->
                <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php $projectImgUrl=wp_get_attachment_url(get_post_thumbnail_id()); ?>

                <!-- Replace the space in Title to a hyphen -->
                <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                <?php $title=str_ireplace("'", "", $tempTitle ); ?>

                <?php echo '<a href="/projects/' . $title . '">' ?>
                <article id="post-<?php the_ID();?>">
                    <div class="image-filler"  style="background:url(<?php echo $projectImgUrl; ?>);">
                    </div>
                    <div class="projectDetails">
                        <section class="title">
                            <?php echo get_the_title() ?>
                            <div class='project-tags'>
                            <?php // Adding tags to the projects
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach($tags as $tag) {
                                        echo "<span>" . $tag->name . "</span>";
                                    }
                                }
                            ?>
                            </div>
                        </section>
                        <p class="content">
                            <?php echo get_the_content() ?>
                        </p>
                    </div>
                </article>
                <?php echo "</a>" ?>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>
        </div>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>