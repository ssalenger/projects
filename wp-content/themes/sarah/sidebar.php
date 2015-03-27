<div class="sidebar">

	<ul>

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar()) : else : ?>

<a href="<?php bloginfo('rss2_url'); ?>">Grab The RSS Feed Here</a>

	<?php endif; ?>

	</ul>

</div>