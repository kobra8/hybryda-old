<?php
if ( function_exists('register_sidebars') )
	register_sidebars(2, array(
        'before_widget' => '<!--sidebox start --><div id="%1$s" class="dbx-box %2$s">',
        'after_widget' => '</div></div><!--sidebox end -->',
        'before_title' => '<h3 class="dbx-handle">',
        'after_title' => '</h3><div class="dbx-content">',
    ));
?>
<?php function widget_itheme_search() {
?><?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_itheme_search');
?><?php function widget_itheme_meta() {
?>
      <!--sidebox start -->
      <div id="meta" class="dbx-box">
        <h3 class="dbx-handle">Meta</h3>
        <div class="dbx-content">
          <ul>
          	  <?php wp_register('<li class="site_admin">','</li>'); ?>
              <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">Wpisy (RSS)</a></li>
              <li class="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>">Komentarze (RSS)</a></li>
              <li class="wordpress"><a href="http://www.wordpress.org" title="Powered by WordPress">WordPress</a></li>
              <li class="login"><?php wp_loginout(); ?></li>
          </ul>
        </div>
      </div>
      <!--sidebox end -->

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Meta'), 'widget_itheme_meta');
?><?php function widget_itheme_links() {
?>
      <!--sidebox start -->
      <div id="links" class="dbx-box">
        <h3 class="dbx-handle"><?php _e('Links'); ?></h3>
        <div class="dbx-content">
          <ul>
            <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
          </ul>
        </div>
      </div>
      <!--sidebox end --><?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Links'), 'widget_itheme_links');
?><?php function widget_itheme_categories(){
?>
	  <!--sidebox start -->
      <div id="categories" class="dbx-box">
        <h3 class="dbx-handle"><?php _e('Categories'); ?></h3>
        <div class="dbx-content">
          <ul>
            <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=1'); ?>
          </ul>
        </div>
      </div>
      <!--sidebox end -->
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Categories'), 'widget_itheme_categories');
?>
