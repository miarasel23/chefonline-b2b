<div class="entry_pagination">
    <div class="post-pagination pagination clearfix">

        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        ?>

        <?php if (!empty( $prev_post )) : ?>
            <a class="page-numbers pull-left page-prev" title="prev post" href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>">
                <?php echo get_the_post_thumbnail( $prev_post->ID, 'goody-next-post'); ?>
                <div class="txt-pagination txt-prev">
                    <span class="btn-prev"><?php echo esc_html__('Previous Post','goody')?></span>
                    <p class="title-pagination"><?php echo esc_attr($prev_post->post_title); ?></p>
                </div>
            </a>
        <?php endif; ?>

        <?php if (!empty( $next_post )) : ?>
            <a class="page-numbers pull-right page-next" title="next post" href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>">
                <?php echo get_the_post_thumbnail( $next_post->ID, 'goody-next-post' ); ?>
                <div class="txt-pagination txt-next">
                    <span class="btn-next"><?php echo esc_html__('Next Post','goody')?></span>
                    <p class="title-pagination"><?php echo esc_attr($next_post->post_title); ?></p>
                </div> </a>
        <?php endif; ?>

    </div>
</div>