<?php get_header(); ?>

    <div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">
		  <div class="date"><span><?php the_time('M') ?></span> <?php the_time('d') ?></div>
		  <div class="title">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <div class="postdata"><span class="category"><?php the_category(', ') ?></span> <span class="comments"><?php comments_popup_link('Brak komentarzy &#187;', '1 Komentarz &#187;', 'Liczba komentarzy % &#187;'); ?></span></div>
		  </div>
          <div class="entry">
            <?php the_content('Czytaj dalej &raquo;'); ?>
            
            <p class="submeta">Autor <strong><?php the_author(); ?></strong> 
			<?php 
				if(function_exists("the_tags"))
					the_tags('\\\\ tagi: ', ', ', '<br />'); 					
			?>
            </p>
          </div><!--/entry -->
          
        </div><!--/post -->

		<?php endwhile; ?>
		
        <div class="page-nav"> <span class="previous-entries"><?php next_posts_link('Poprzedni wpis') ?></span> <span class="next-entries"><?php previous_posts_link('Następny wpis') ?></span></div><!-- /page nav -->

	<?php else : ?>

		<h2>Nie znaleziono</h2>
	  <p>Niestety, brak szukanych przez Ciebie informacji.</p>

	<?php endif; ?>

      </div><!--/content -->

      <div id="footer"><span class="mangoorange"><a href="http://wordpress-polska.org/download/wordpress">WordPress PL</a> 
                        Motyw i3Theme 1.6 - <a href="http://www.ndesign-studio.com">N.Design Studio</a> i 
			 <a href="http://www.mangoorange.com/">MangoOrange&trade;</a>, 
T&#322;umaczenie: <a href="http://www.NieTylkoISO.pl/">Rafa&#322; Tochman</a>.</span></div>
		
</div><!--/left-col -->

<?php 
$current_page = $post->ID; // Hack to prevent the no sidebar error
include_once("sidebar-right.php"); 
//get_sidebar();
?>

<?php get_footer(); ?>