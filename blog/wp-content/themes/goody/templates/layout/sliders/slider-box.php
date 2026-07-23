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
$add_class='';
$comments = get_theme_mod('goody_post_cat_meta_comment', true);
$view = get_theme_mod('goody_post_meta_view', true);
$share = get_theme_mod('goody_post_meta_share', false);
?>

    <article <?php post_class('post-item post-list  clearfix '); ?>>
        <div class="article-image ">
                <?php if(has_post_thumbnail()) : ?>
                    <?php if(!get_theme_mod('sp_post_thumb')) :
                        $bg_image= get_the_post_thumbnail_url( null, 'full-thumb' );
                        $background_image="background-image:url('$bg_image')";
                        $style_css      ='style = '.$background_image.'';
                        ?>
                        <div class="post-image single-bgr-image"  <?php echo esc_attr($style_css);?>>
                                <div class="article-content vanlong">
                                <div class="entry-header clearfix">
                                    <span class="post-cat"><?php echo goody_category(' '); ?></span>
                                    <header class="entry-header-title">
                                        <?php
                                        the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                                        ?>
                                    </header>
                                    <div class="article-meta clearfix">
                                        <?php goody_entry_meta(); ?>
                                    </div>
                                    <div class="entry-content">
                                        <?php
                                        if ( has_excerpt() || is_search() ){
                                            goody_excerpt();
                                        }
                                        else{
                                            echo goody_content(35);
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
                                    <?php
                                    if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) && !get_the_title()) {
                                        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

                                        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                                            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
                                        }

                                        $time_string = sprintf( $time_string,
                                            esc_attr( get_the_date( 'c' ) ),
                                            get_the_date(),
                                            esc_attr( get_the_modified_date( 'c' ) ),
                                            get_the_modified_date()
                                        );

                                        printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark"><i class="icon icon-clock"></i> %3$s</a></span>',
                                            _x( 'Posted on', 'Used before publish date.', 'goody' ),
                                            esc_url( get_permalink() ),
                                            $time_string
                                        );
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else :
                    $placeholder_image = get_template_directory_uri(). '/assets/images/placeholder-box.png';
                    ?>
                    <div class="post-image  placeholder-trans ">
                        <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('buggy-blog-tran'); ?>
                            <img src="<?php echo esc_url($placeholder_image); ?>" class="wp-post-image" width="1170" height="500">
                        </a>
                    </div>
                <?php endif; ?>
        </div>
    </article><!-- #post-## -->
<!--<a href="--><?php //echo esc_url(comments_link());?><!--" class="text-comment">-->