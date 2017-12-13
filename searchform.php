<!-- searchform.php -->

<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div>
		<input type="text" autocomplete="off" value="<?php the_search_query(); ?>" name="s" id="field" size="25" maxlength="30"/>
		<!--<input type="submit" id="searchsubmit" value="OK" />-->

		<input type="image" id = "button" alt="Search" src="http://localhost:8888/wordpress_surkrut_2015/wp-content/uploads/2017/12/loupe.png"/>
		
	</div>
</form>

<!-- fin searchform.php -->