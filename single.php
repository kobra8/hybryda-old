<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
      <div class="post-nav"> 
         <span class="previous"><?php previous_post_link('%link') ?></span> 
         <span class="next"><?php next_post_link('%link') ?></span>
      </div>  

      <div class="post" id="post-<?php the_ID(); ?>">
         <div class="date"><span><?php the_time('M') ?></span> <?php the_time('d') ?></div>
         <div class="title">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?></a></h2>
            <div class="postdata">
               <span class="category"><?php the_category(', ') ?></span>
               <span class="right mini-add-comment"><a href="#respond">Dodaj 
				komentarz</a></span>
            </div>
         </div>
         
         <div class="entry">
         <?php the_content('Czytaj dalej &raquo;'); ?>
         <?php link_pages('<p><strong>Strony:</strong> ', '</p>', 'number'); ?>
         
         <p class="submeta">Autor<strong> <?php the_author(); ?></strong> 
         <?php 
         if(function_exists("the_tags"))
         the_tags('\\\\ tagi: ', ', ', '<br />'); 					
         ?>
         </p>
         <?php edit_post_link('Edytuj', '', ''); ?>
         </div><!--/entry -->
         
         <?php comments_template(); ?>
      </div><!--/post -->
      
	<?php endwhile; else: ?>
                 
         <p>Niestety, brak postów spelniaj&#261;cych podane kryteria.</p>
         
	<?php endif; ?>

	</div><!--/content -->
  
  		<div id="footer"><span class="mangoorange">Motyw <a href="http://www.i3theme.com">i3Theme 1.6</a> stworzono przez <a href="http://www.ndesign-studio.com">N.Design Studio</a>, 
			przystosowano przez <a href="http://www.mangoorange.com/">MangoOrange&trade;</a>, <br/>
T&#322;umaczenie: Rafa&#322; Tochman <a href="http://www.NieTylkoISO.pl/">Zarz&#261;dzanie jako&#347;ci&#261;</a>.</span></div>
		
</div><!--/left-col -->

<?php 
$current_page = $post->ID; // Hack to prevent the no sidebar error
include_once("sidebar-right.php"); 
?>

  
<?php get_footer(); ?>