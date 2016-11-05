<?php /* Template Name: People */ ?>
<?php /** * The template for displaying all pages. * * This is the template that displays all pages by default. * Please note that this is the WordPress construct of pages * and that other 'pages' on your WordPress site will use a * different template. * * @package adamos * @since adamos 1.0 */ get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="people-content" role="main">
        <div id="people">
            <?php $researchers_url=site_url('wp-content/uploads/2014/08/researchers.jpg'); ?>
            <div class="full-img featureImg full parallaxContainer" style="background:url('<?php echo $researchers_url ?>'); background-size:cover; background-position:right 0px;"></div>
            <?php query_posts( '&cat=3&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <!-- <h1><?php single_cat_title() ?></h1> -->
                <div class="wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $profileImg=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        <div class="image-filler" style="background:url('<?php echo $profileImg ?>') no-repeat scroll;"></div>
                        <p>
                            <span><?php echo get_the_content() ?></span>   
                        </p>
                        <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                        <?php $title=strtolower($tempTitle); ?>
                        <?php // echo '<a class="more" href="/people/' . $title . '">More</a>' ?>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
            
            <?php /*
                ------ RESEARCH FACULTY
            */ ?>
            <?php query_posts( '&cat=17&order=asc'); ?>
            <section id="<?php echo str_replace(' ', '_',single_cat_title('', false)); ?>">
                <h1><?php single_cat_title() ?></h1>
                <div class="wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $profileImg=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        <div class="image-filler" style="background:url('<?php echo $profileImg ?>') no-repeat scroll;"></div>
                        <p class="eng">
                            <span class="truncate"><?php echo get_the_content() ?></span>
                        </p>
                        
                        <?php 
                            $postID = $post->ID;
                            echo "<p class='lang'><span>". get_post_meta($postID, 'language-content', true) ."</span></p>";
                        ?>
                        
                        <?php if (get_post_meta($postID, 'language-content', true)) { ?>
                            <div class="lang-switch">
                                <div class="container">
                                    <span class="eng selected">ENG</span>
                                    <span class="lang"><?php echo get_post_meta($postID, 'language-type', true); ?></span>
                                </div>
                            </div>
                        <? } ?>
                        
                        <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                        <?php $title=strtolower($tempTitle); ?>
                        <?php //echo '<a class="more" href="' . $title . '">More</a>' ?>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
            
            <?php /*
                ------ RESEARCHERS
            */ ?>
            <?php query_posts( '&cat=4&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <h1><?php single_cat_title() ?></h1>
                <div class="wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $profileImg=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        <div class="image-filler" style="background:url('<?php echo $profileImg ?>') no-repeat scroll;"></div>
                        <p class="eng">
                            <span class="truncate"><?php echo get_the_content() ?></span>
                        </p>
                        
                        <?php 
                            $postID = $post->ID;
                            echo "<p class='lang'><span>". get_post_meta($postID, 'language-content', true) ."</span></p>";
                        ?>
                        
                        <?php if (get_post_meta($postID, 'language-content', true)) { ?>
                            <div class="lang-switch">
                                <div class="container">
                                    <span class="eng selected">ENG</span>
                                    <span class="lang"><?php echo get_post_meta($postID, 'language-type', true); ?></span>
                                </div>
                            </div>
                        <? } ?>
                        
                        <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                        <?php $title=strtolower($tempTitle); ?>
                        <?php //echo '<a class="more" href="' . $title . '">More</a>' ?>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
            
            <?php /*
                ------ ALUMNI
            */ ?>
            <?php query_posts( '&cat=15&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <h1><?php single_cat_title() ?></h1>
                <div class="wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $profileImg=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        
                        <?php if ($profileImg) {
                            echo "<div class='image-filler' style='background:url(" . $profileImg . ") no-repeat scroll;'></div>";
                        }?>
<!--                        <div class="image-filler" style="background:url('<?php echo $profileImg ?>') no-repeat scroll;"></div>-->
                        <p>
                            <span><?php echo get_the_content() ?></span>
                        </p>
                        <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                        <?php $title=strtolower($tempTitle); ?>
                        <?php //echo '<a class="more" href="' . $title . '">More</a>' ?>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
            
            <?php /*
                ------ COLLABORATORS
            */ ?>
            <?php query_posts( '&cat=16&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <h1><?php single_cat_title() ?></h1>
                <div class="wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $profileImg=wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        <?php if ($profileImg) {
                            echo "<div class='image-filler' style='background:url(" . $profileImg . ") no-repeat scroll;'></div>";
                        }?>
                        <p>
                            <span class="truncate"><?php echo get_the_content() ?></span>
                        </p>
                        <?php $tempTitle=str_ireplace(" ", "-", get_the_title()); ?>
                        <?php $title=strtolower($tempTitle); ?>
                        <?php //echo '<a class="more" href="' . $title . '">More</a>' ?>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
<!--
            <?php query_posts( '&cat=5&order=asc'); ?>
            <section id="<?php single_cat_title() ?>">
                <h1><?php single_cat_title() ?></h1>
                <div class="people-wrap">
                    <?php global $more; $more=0 ; if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <article>
                        <h2><?php echo get_the_title() ?></h2>
                        <div class="image-filler"></div>
                        <p>
                            <?php echo get_the_content() ?>
                        </p>
                    </article>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </section>
-->
        </div>
    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/parallax.js"></script>
<script type="text/javascript">
    
    (function ($) {
        console.log('activate');
        $('.lang-switch .eng').click(function() {
            $(this).addClass('selected').siblings().removeClass('selected');
            $(this).closest('article').find('p.lang').hide();
            $(this).closest('article').find('p.eng').show();
        });
        $('.lang-switch .lang').click(function() {
            $(this).addClass('selected').siblings().removeClass('selected');
            $(this).closest('article').find('p.eng').hide();
            $(this).closest('article').find('p.lang').show();
        });
    })(jQuery);
    
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>