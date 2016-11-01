      <nav class="navbar navbar-default" id="site-navigation" role="navigation">

        <?php wp_nav_menu(array(
                  'theme_location' => 'header-nav-bar',
                  'container' => 'div',
                  'container_id' => 'header-nav-wrapper',
                  'container_class' => 'container-fluid',
                  'menu_id' => 'header-nav',
                  'menu_class' => 'nav navbar-nav navbar-right'
        ));?>

      </nav><!-- #site-navigation -->