<?php
/**
 * @package     NA Core
 * @version     2.0
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */

//$configTopbar       = str_replace('','',goody_topbar_config() );

?>
<div id="goody-top-navbar" class="top-navbar <?php echo esc_attr($configTopbar);?> ">
    <div class="container">
        <div class="row top-bar-fex">
            <div class="topbar-left col-xs-12 col-sm-6 col-md-6">
                <?php
                if(is_active_sidebar( 'custom-topbar-left' )){
                    dynamic_sidebar('custom-topbar-left');
                }?>
            </div>
            <div class="topbar-right hidden-xs col-sm-6 col-md-6 clearfix">
                <?php
                    if(is_active_sidebar( 'custom-topbar-right' )){
                        dynamic_sidebar('custom-topbar-right');
                    }?>
            </div>

        </div>

    </div>
</div>