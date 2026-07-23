<?php
/**
 * The default template for displaying content
 *
 * @author      Nanogoody
 * @link        http://nanogoody.co
 * @copyright   Copyright (c) 2015 Nanogoody
 * @license     GPL v2
 */
$format = get_post_format();
$placeholder_image = get_template_directory_uri(). '/assets/images/layzyload-grid.jpg';
//share
$share = get_theme_mod('goody_post_meta_share', false);
?>

<article <?php post_class('post-item post-list  clearfix'); ?>>
    <div class="article-tran">
        <?php if(has_post_thumbnail()) : ?>
            <?php if(!get_theme_mod('sp_post_thumb')) : ?>
                <?php if(has_post_thumbnail()) : ?>
                    <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "goody-blog-grid" ); ?>
                    <div class="post-image single-bgr-image">
                        <img  class="lazy " src="<?php echo esc_url($placeholder_image);?>"  data-original="<?php echo esc_attr($thumbnail_src[0]);?>" data-lazy="<?php echo esc_attr($thumbnail_src[0]);?>" alt="post-image"/>
                    </div>
                <?php endif;?>
                <div class="article-content">
                    <span class="post-cat"><?php echo goody_category(' '); ?></span>
                    <div class="entry-header clearfix">
                        <header class="entry-header-title">
                            <?php
                            the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                            ?>
                        </header>
                    </div>
                    <div class="article-meta clearfix">
                        <?php goody_entry_meta(); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php else :
            $placeholder_image = get_template_directory_uri(). '/assets/images/placeholder-trans.png';
            ?>
            <div class="post-image  placeholder-trans">
            </div>
            <div class="article-content no-thumb">
                <span class="post-cat"><?php echo goody_category(' '); ?></span>
                <div class="entry-header clearfix">
                    <header class="entry-header-title">
                        <?php
                        the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                        ?>
                    </header>
                </div>
                <div class="article-meta clearfix">
                    <?php goody_entry_meta(); ?>
                </div>
                <a class="readmore" href="<?php echo get_permalink() ?>"><?php esc_html_e('Read more','goody'); ?></a>

            </div>
        <?php endif; ?>
    </div>

</article><!-- #post-## -->
