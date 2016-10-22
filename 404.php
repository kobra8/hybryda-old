<?php get_header(); ?>
  <div id="content">
      
    <div class="post">
        <h2>B&#322;&#261;d 404 - Nie znaleziono</h2>
		
		<div class="entry">
		<p>Niestety, strona kt&oacute;rej szukasz nie istnieje.</p>	
		</div><!--/entry -->
	
	</div><!--/post -->
	
  </div><!--/content -->
  
		<div id="footer"><span class="mangoorange">Motyw <a href="http://www.i3theme.com">i3Theme 1.6</a> stworzono przez <a href="http://www.ndesign-studio.com">N.Design Studio</a>, 
			przystosowano przez <a href="http://www.mangoorange.com/">MangoOrange&trade;</a>, <br/>
T&#322;umaczenie: Rafa&#322; Tochman <a href="http://www.NieTylkoISO.pl/">Zarz&#261;dzanie jako&#347;ci&#261;</a>. </span></div>
		
</div><!--/left-col -->

<?php 
$current_page = $post->ID; // Hack to prevent the no sidebar error
include_once("sidebar-right.php"); 
?>
  
<?php get_footer(); ?>