<?php
/**
 * @package     goody
 * @version     1.0
 * @author      NanoAgency
 * @link        http://www.nanoagency.co
 * @copyright   Copyright (c) 2016 NanoAgency
 * @license     GPL v2
 */
class goody_most_views extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'goody_most_views',esc_html__('+NA: Most Views','goody'),
            array('description'=> esc_html__(' Most Views', 'goody'))
        );
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $posts = $instance['posts'];
        $title = apply_filters('widget_title', $instance['title']);
		echo ent2ncr($args['before_widget']);
        if($title) {
            echo ent2ncr($args['before_title']) . esc_html($title) . ent2ncr($args['after_title']);
        }
    ?> 
	<aside class="widget widget_most_views">
            <div class="most-views-content">
            <?php
            $popular_posts = new WP_Query('showposts='.$posts.'&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
            $j=1;
            if($popular_posts->have_posts()):
                ?>
                <div class="post-widget  posts-listing post-sidebar">
                    <?php while($popular_posts->have_posts()): $popular_posts->the_post(); ?>
                        <article class="post media post-item">
                                    <div class="post-thumb pull-left">
                                        <?php if ( has_post_thumbnail() ) {?>
                                            <a href="<?php the_permalink(); ?>" title="">
                                                <?php the_post_thumbnail('goody-sidebar');?>
                                            </a>
                                        <?php }?>
                                    </div>
                                    <div class="post-content  media-body">
                                        <h3 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="entry-footer">
                                            <?php
                                            $comments_facebook = get_theme_mod('goody_comments_single_facebook',false);
                                            $views 		= get_theme_mod('goody_cat_content_view',true);
                                            $likes 		= get_theme_mod('goody_cat_content_like',true);
                                            ?>
                                            <a class = "comment-text" href="<?php echo esc_url(comments_link());?>">
                                                <span><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                                <?php if($comments_facebook){?>
                                                    <span class="fb-comments-count" data-href="<?php echo esc_url(get_permalink()) ?>"></span><span class="txt"><?php echo esc_html__('Comments','goody')?></span>
                                                <?php } else{?>
                                                    <span class="text-comment"><?php comments_number( '0', '1 ', '% Comments' ); ?></span>
                                                <?php }?>
                                            </a>
                                            <?php if($views):?>
                                                <div class="total-view">
                                                    <i class="fa fa-eye-slash"></i> <?php echo get_post_meta(get_the_ID(), 'post_views_count', true);?>
                                                </div>
                                            <?php endif;?>
                                        </div>
                                    </div>
                        </article>
                        <?php ?>
                    <?php endwhile;   wp_reset_postdata();?>
                </div>
            <?php endif; ?>
        </div>
        </aside>
        <?php
        echo ent2ncr($args['after_widget']);;
    }
// Widget Backend
    public function form( $instance ) {
        $instance = wp_parse_args($instance,array(
            'title'       =>  'Most Views',
            'posts' => 3,
        ));
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <strong><?php esc_html_e('Title', 'goody') ?>:</strong>
                <input type="text" class="agencyfat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                       value="<?php if (isset($instance['title'])) echo esc_attr($instance['title']); ?>"/>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('posts')); ?>"><?php echo esc_html__('Number of Most Views posts:', 'goody' ); ?></label>
            <input class="agencyfat" type="text" style="width: 30px;" id="<?php echo esc_attr($this->get_field_id('posts')); ?>" name="<?php echo esc_attr($this->get_field_name('posts')); ?>" value="<?php echo esc_attr($instance['posts']); ?>" />
        </p>
    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['posts'] = $new_instance['posts'];
        return $instance;

    }
}
function goody_most_views(){
    register_widget('goody_most_views');
}
add_action('widgets_init','goody_most_views');
