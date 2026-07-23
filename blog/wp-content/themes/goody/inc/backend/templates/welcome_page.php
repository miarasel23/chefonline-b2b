<?php
/**
 * Welcome Theme Page
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */
?>
<div class="nano-welcome-plugins">
    <div class="theme-browser rendered">
        <div class="nano-welcome">
            <div class="theme-browser rendered">
                <div class=" demo">
                    <h3><?php echo esc_html__('Steps 1. Install the Plugins', 'goody'); ?></h3>
                    <p><?php echo esc_html__( 'Please be mind that plugins with "required" badge are essential to make Goody work smoothly.','goody');?></p>
                    <p><span><?php echo esc_html__( 'If you want to sure you will install like as demo , you should install and active ','goody');?></span><a href="<?php echo esc_url( add_query_arg( 'page', 'tgmpa-install-plugins', network_admin_url( 'admin.php' ) ) );?>"><?php echo esc_html__('all plugins','goody');?></a></p>
                    <p><?php echo esc_html__( 'By default when the new version of plugins is released we update the Goody Theme too.','goody');?></p>
                </div>
                <div class="demo">
                    <h3><?php echo esc_html__('Steps 2. Install the Demo Content', 'goody'); ?></h3>
                    <h4><?php echo esc_html__('Pre-Installation Requirements:', 'goody'); ?></h4>
                    <ul>
                        <li><?php echo esc_html__('- WordPress 4.3.1 or higher and PHP 6.0 or higher','goody') ?></li>
                        <li><?php echo esc_html__('- Recommended memory_limit is no less than 64M ','goody');?></li>
                        <li><?php echo esc_html__('- Upload_max_filesize should be no less than 20M.','goody');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
