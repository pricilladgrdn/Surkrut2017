<!-- sidebar.php -->

<div class="sidebar" id="blogroll">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-top') ) : ?>
	
	<?php echo get_post(862)->post_content; ?>

	<!--<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
	<li id="archive"><h2>Archives</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
	</li>
	<?php get_links_list(); ?>-->

	<?php endif; ?>
</div>

<!-- fin sidebar.php -->
