<!-- sidebar.php -->

<div class="sidebar">
<ul>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<li id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
	
	<li id="autresblogs"><h2>Autres blogs</h2>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
	</li>

	<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
	<li id="archive"><h2>Archives</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
	</li>
	<?php get_links_list(); ?>

<?php endif; ?>
</ul>
</div>

<!-- fin sidebar.php -->
