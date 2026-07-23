<?php
/**
 * @package     goody
 * @version     1.0
 * @author      NanoAgency
 * @link        http://www.nanoagency.co
 * @copyright   Copyright (c) 2016 NanoAgency
 * @license     GPL v2
 */

class goody_tabs_post extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'tabs_post', esc_html__('+NA: Tabs Post','goody'),
            array('description'=> esc_html__('Tabs Post', 'goody'))
        );
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $posts = $instance['posts'];
        $tags_count = $instance['tags'];
        $show_popular_posts = isset($instance['show_popular_posts']) ? 'true' : 'false';
        $show_recent_posts = isset($instance['show_recent_posts']) ? 'true' : 'false';
        $show_comments = isset($instance['show_comments']) ? 'true' : 'false';
        echo ent2ncr($args['before_widget']);?>
        <br>
        <h2 class="widgettitle">Recent Post</h2>

        <!-- Tab panes -->
        <div class="tab-content">
            
            <?php //if($show_recent_posts == 'true'): ?>
                <div class="tab-pane active posts-listing" id="tab-recent">
                    <?php
                    // $recent_posts = new WP_Query('showposts='.$tags_count);
                    $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'orderby' => 'menu_order', 'order'=> 'DESC'));
                    if($loop->have_posts()):
                        ?>
                        <div class="post-widget  posts-listing">
                            <?php
                            while ( $loop->have_posts() ) :
                                $loop->the_post();
                              ?>
                                <article <?php post_class('post-item post-sidebar  clearfix'); ?>>
                                    <div class="article-image">
                                            <?php if(has_post_thumbnail()) : ?>
                                                <?php if(!get_theme_mod('sp_post_thumb')) : ?>
                                                    <div class="post-image">
                                                        <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('goody-sidebar'); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                                <?php else :
                                                    $add_class='full-width';
                                            endif; ?>
                                    </div>
                                    <div class="article-content side-item-text <?php echo esc_attr($add_class);?>">
                                        <div class="entry-header clearfix">
                                <!--            <span class="post-cat">--><?php //echo goody_category(', '); ?><!--</span>-->
                                            <header class="entry-header-title">
                                                <?php
                                                    the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                                                ?>
                                            </header>
                                        </div>
                                        <div class="entry-footer">
                                            <span class="post-date">
                                                <?php echo get_the_date('M d, Y'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </article><!-- #post-## -->
                            <?php endwhile; ?>
                        </div>
                    <?php  wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
            <?php if($show_comments == 'true'): ?>
                <div class="tab-pane" id="tab-comments">
                    <div class="comment-widget  posts-listing">
                        <?php
                        $number = $instance['comments'];
                        global $wpdb;
                        $the_comments = get_comments( array(
                            'number'    => $number,
                            'status'    => 'approve'
                        ) );
                        foreach($the_comments as $comment) { ?>
                            <article class=" post media clearfix">
                                <div class="avatar-comment-widget pull-left">
                                    <?php echo get_avatar($comment, '70'); ?>
                                </div>
                                <div class="content-comment-widget media-body">
                                    <h3 class="entry-title">
                                        <?php echo strip_tags($comment->comment_author); ?> <?php esc_html__('says', 'goody' ); ?>:
                                    </h3>
                                    <a class="comment-text-side" href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo esc_attr($comment->comment_ID); ?>" title="<?php echo strip_tags($comment->comment_author); ?> on <?php echo esc_attr($comment->post_title); ?>">
                                        <?php echo goody_string_limit_words(strip_tags($comment->comment_content), 12); ?>...
                                    </a>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php
        echo ent2ncr($args['after_widget']);;
    }
// Widget Backend
    public function form( $instance ) {
        $instance = wp_parse_args($instance,array(
            'title'       =>  'Contact info',
            'posts' => 3,
            'comments' => '3',
            'tags' => '3',
            'show_popular_posts' => 'on',
            'show_recent_posts' => 'on',
            'show_comments' => 'on',
        ));
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('posts')); ?>"><?php echo esc_html__('Number of Most Views posts:', 'goody' ); ?></label>
            <input class="widefat" type="text"  id="<?php echo esc_attr($this->get_field_id('posts')); ?>" name="<?php echo esc_attr($this->get_field_name('posts')); ?>" value="<?php echo esc_attr($instance['posts']); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('tags')); ?>"><?php echo esc_html__('Number of recent posts:', 'goody' ); ?></label>
            <input class="widefat" type="text"  id="<?php echo esc_attr($this->get_field_id('tags')); ?>" name="<?php echo esc_attr($this->get_field_name('tags')); ?>" value="<?php echo esc_attr($instance['tags']); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('comments')); ?>"><?php echo esc_html__('Number of comments:', 'goody' ); ?></label>
            <input class="widefat" type="text"  id="<?php echo esc_attr($this->get_field_id('comments')); ?>" name="<?php echo esc_attr($this->get_field_name('comments')); ?>" value="<?php echo esc_attr($instance['comments']); ?>" />
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked($instance['show_popular_posts'], 'on'); ?> id="<?php echo esc_attr($this->get_field_id('show_popular_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('show_popular_posts')); ?>" />
            <label for="<?php echo esc_attr($this->get_field_id('show_popular_posts')); ?>"><?php echo esc_html__('Show Most Views posts', 'goody' ); ?></label>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked($instance['show_recent_posts'], 'on'); ?> id="<?php echo esc_attr($this->get_field_id('show_recent_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('show_recent_posts')); ?>" />
            <label for="<?php echo esc_attr($this->get_field_id('show_recent_posts')); ?>"><?php echo esc_html__('Show recent posts', 'goody' ); ?></label>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked($instance['show_comments'], 'on'); ?> id="<?php echo esc_attr($this->get_field_id('show_comments')); ?>" name="<?php echo esc_attr($this->get_field_name('show_comments')); ?>" />
            <label for="<?php echo esc_attr($this->get_field_id('show_comments')); ?>"><?php echo esc_html__('Show comments', 'goody' ); ?></label>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['posts'] = $new_instance['posts'];
        $instance['tags'] = $new_instance['tags'];
        $instance['comments'] = $new_instance['comments'];
        $instance['show_popular_posts'] = $new_instance['show_popular_posts'];
        $instance['show_recent_posts'] = $new_instance['show_recent_posts'];
        $instance['show_comments'] = $new_instance['show_comments'];
        return $instance;

    }
}
function goody_tabs_post(){
    register_widget('goody_tabs_post');
}
add_action('widgets_init','goody_tabs_post');