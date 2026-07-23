<header id="masthead" class="site-header header-simple">
    <div id="goody-header">
        <div class="container">
            <div class="goody-header-content ">
                <!--Logo-->
                <div class="header-content-logo">
                    <?php
                            get_template_part('templates/logo');
                    ?>
                </div>
                <!-- Menu-->
                <div class="header-content-menu">
                    <div id="na-menu-primary" class="nav-menu clearfix">
                        <nav class="text-center na-menu-primary clearfix">
                            <?php
                            if (has_nav_menu('primary_navigation')) :
                                // Main Menu
                                wp_nav_menu( array(
                                    'theme_location' => 'primary_navigation',
                                    'menu_class'     => 'nav navbar-nav na-menu mega-menu',
                                    'container'      => '',
                                ) );
                            endif;
                            ?>
                        </nav>
                    </div>
                </div>
                <!--Seacrch & Cart-->
                <div class="header-content-right">

                    <div class="header-social">
                        <?php
                        if(is_active_sidebar( 'custom-header-social' )){
                            dynamic_sidebar('custom-header-social');
                        }?>
                    </div>
                    <div class="searchform-mini">
                        <button class="btn-mini-search"><i class="ti-search"></i></button>
                    </div>
                    <div class="searchform-wrap search-transition-wrap goody-hidden">
                        <div class="search-transition-inner">
                            <?php
                                get_search_form();
                            ?>
                            <button class="btn-mini-close pull-right"><i class="fa fa-close"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div>
</header><!-- .site-header -->