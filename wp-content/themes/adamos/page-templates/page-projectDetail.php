<?php /* Template Name: ProjectDetail */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="people-content" role="main">
        <section class="project-detail">
            <?php query_posts( '&page_id='. get_the_ID()); ?>
            <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <?php 
            $pagelist = get_pages('sort_column=menu_order&amp;sort_order=asc'); // GETTING THE SAME PAGES IN SAME CATEGORY
            $projectPages = array();
            foreach ($pagelist as $page) {
               $projectPages[] += $page->ID;
            }

            $current = array_search($post->ID, $projectPages);
            $prevID = $projectPages[$current-1];
            $nextID = $projectPages[$current+1];
            ?>
            <div class="projectBG">
                <div class="thumbnail" id="fimg-<?php the_ID(); ?>" style="background:url(<?php echo $featuredImage; ?>) no-repeat scroll;"></div>
            </div>
            <h2>
                <?php if (!empty($prevID)) { ?>
                <div class="before"><a href="<?php echo get_permalink($prevID); ?>"><i class="fa fa-caret-left"></i></a></div>
                <?php } ?>
                <?php echo get_the_title() ?>
                <div class="after"><a href="<?php echo get_permalink($nextID); ?>"><i class="fa fa-caret-right"></i></a></div>
            </h2>
            
            <article>
                <div class="wrap">
                    <?php echo get_the_content() ?>
                </div>
            </article>
            <?php     
                $categories = get_cat_ID(get_the_title());
            ?>
            <div class="wrap image-gallery-container">
                <h2>Gallery</h2>
                <div id="project-image-gallery">
                    <?php    
                        $args = array(
                        'post_type' => 'attachment',
                        'posts_per_page' =>25,
                        'numberposts' => 10,
                        'order' => 'asc',
                        'cat' =>  $categories //Category ID
                        );

                        $attachments = get_posts($args);

                        if ($attachments) {
                            foreach ($attachments as $attachment) {
                                $url = wp_get_attachment_url($attachment->ID);
                                echo '<div style="background:url('.$url.') no-repeat scroll;" ></div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </section>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>