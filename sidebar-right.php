<div class="dbx-group" id="sidebar-right">

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>      

      <!--sidebox start -->
      <div id="links" class="dbx-box">
        <h3 class="dbx-handle"><?php _e('Links'); ?></h3>
        <div class="dbx-content">
          <ul>
            <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
          </ul>
        </div>
      </div>
      <!--sidebox end -->

      <!--sidebox start -->
      <div id="meta" class="dbx-box">
        <h3 class="dbx-handle">Redakcja</h3>
        <div class="dbx-content">
          <ul>
          	  <?php wp_register('<li class="site_admin">','</li>'); ?>
              
              <li class="login"><?php wp_loginout(); ?></li>
          </ul>
        </div>
      </div>
      <!--sidebox end -->

  <?php endif; ?>

</div><!--/sidebar -->