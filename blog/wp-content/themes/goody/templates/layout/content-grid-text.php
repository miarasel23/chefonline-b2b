<?php
/**
 * The default template for displaying content
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */

$format = get_post_format();
$format = get_post_format();
$add_class='';

//number word content
$number_word = get_theme_mod('goody_number_content_post','25');
$placeholder_image = get_template_directory_uri(). '/assets/images/layzyload-grid.jpg';
$share = get_theme_mod('goody_post_meta_share', false);
?>
<article  <?php post_class('post-item grid-text grid-full post-grid clearfix'); ?>>
    <div class="article-image">
        <?php if(has_post_thumbnail()) : ?>
            <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "goody-blog-grid" ); ?>
            <div class="image-item">
                <a href="<?php echo get_permalink() ?>" class="bgr-item"></a>
                <a href="<?php echo get_permalink();?>">
                    <img  class="lazy" src="<?php echo esc_url($placeholder_image);?>"  data-original="<?php echo esc_attr($thumbnail_src[0]);?>" data-lazy="<?php echo esc_attr($thumbnail_src[0]);?>" alt="post-image"/>
                </a>
                <?php
                if ($share) { ?>
                    <?php get_template_part('templates/share-social');?>
                <?php }
                ?>
            </div>

        <?php else :
            $add_class='full-width';
        endif; ?>
        <?php if(has_post_format('gallery')) : ?>
            <?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true );?>
            <?php if($images) : ?>
                <div class="post-gallery">
                    <a  href="<?php echo get_post_format_link( $format ); ?>" class="post-format"><i class="ti-camera"></i></a>
                </div>
            <?php endif; ?>

        <?php elseif(has_post_format('video')) : ?>
            <div class="post-video">
                <a  href="<?php echo get_post_format_link( $format ); ?>" class="post-format"><i class="ti-control-play"></i></a>
            </div>
        <?php elseif(has_post_format('audio')) : ?>
            <div class="post-audio">
                <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('goody-grid-full'); ?></a>
                <a  href="<?php echo get_post_format_link( $format ); ?>" class="post-format"><i class="ti-headphone"></i></a>
            </div>
        <?php elseif(has_post_format('quote')) :?>
            <div class="post-quote <?php echo esc_attr($add_class);?>">
                <?php $sp_quote = get_post_meta( get_the_ID(), '_format_quote_source_name', true ); ?>
                <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('goody-blog-list'); ?></a>
                <a  href="<?php echo get_post_format_link( $format ); ?>" class="post-format"><i class="ti-quote-left"></i></a>
            </div>
        <?php endif; ?>
    </div>
    <div class="article-content <?php echo esc_attr($add_class);?>">
        <div class="entry-header clearfix">
            <span class="post-cat"><?php echo goody_category(' '); ?></span>
            <header class="entry-header-title">
                <?php
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                ?>
            </header>
        </div>
        <div class="article-meta clearfix">
            <?php goody_entry_meta();?>
        </div>
        <div class="entry-content">
            <?php
            if ( has_excerpt()){
                goody_excerpt();
            }
            else{
                echo goody_content(25);
            }

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'goody' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span class="page-numbers">',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'goody' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );
            ?>
        </div>
        <a class="readmore" href="<?php echo get_permalink() ?>"><?php esc_html_e('Read more','goody'); ?></a>
    </div>
</article><!-- #post-## -->
