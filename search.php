<?php get_header(); ?>

<!-- search.php -->

<?php wp_nav_menu(array( 
'theme_location' => 'menu-gauche', 
'container_class' => 'menu' )); ?>

<div id="content">
<?php if(have_posts()) : ?>		
	<table>
		<?php while(have_posts()) : the_post(); ?>
			<tr class="post" id="post-<?php the_ID(); ?>">
				<td class="image">
					<?php if(has_post_thumbnail()) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
				</td>
			
				<td class="texte">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="postmetadata"><?php the_time('j/m/Y') ?> | <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?></p>
					<div class="post_content">
						<?php the_excerpt(); ?>
					</div>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
<?php else : ?>
		<h2 class="center">Aucun article trouvé. Essayer une autre recherche ?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
</div>

<!-- fin search.php -->

<div id="chrono"><ul><?php wp_get_archives('type=yearly'); ?></ul></div>

<?php get_sidebar(); ?>
<?php wp_footer(); ?>