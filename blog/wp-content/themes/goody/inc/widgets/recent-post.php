<?php
/**
 * @package     goody
 * @version     1.0
 * @author      NanoAgency
 * @link        http://www.nanoagency.co
 * @copyright   Copyright (c) 2016 NanoAgency
 * @license     GPL v2
 */
class goody_post extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'goody_post', esc_html__('+NA: Recent Post','goody'),
            array('description'=> esc_html__('Recent Post', 'goody'))
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
    ?> <aside class="widget widget_tabs_post">
            
            <div class="recent-content">
            <?php
            $recent_posts = new WP_Query('showposts='.$posts);
            $j=1;
            if($recent_posts->have_posts()):
                ?>
                <div class="post-widget  posts-listing">
                    <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                        <?php get_template_part( 'templates/layout/sidebar/content-sidebar2'); ?>
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
            'title'       =>  'Recent Post',
            'posts' => 3,
        ));
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <strong><?php esc_html_e('Title', 'goody') ?>:</strong>
                <input type="text" class="agency" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                       value="<?php if (isset($instance['title'])) echo esc_attr($instance['title']); ?>"/>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('posts')); ?>"><?php echo esc_html__('Number of Recent posts:', 'goody' ); ?></label>
            <input class="agencyfat" type="text" id="<?php echo esc_attr($this->get_field_id('posts')); ?>" name="<?php echo esc_attr($this->get_field_name('posts')); ?>" value="<?php echo esc_attr($instance['posts']); ?>" />
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
function goody_post(){
    register_widget('goody_post');
}
add_action('widgets_init','goody_post');
