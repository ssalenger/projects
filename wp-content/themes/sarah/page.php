<?php get_header(); ?>

<div id="container">

	<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>

		<div class="post">
			<div class="inner">

			<h1><?php the_title(); ?></h1>

				<?php the_content("[Read more &rarr;]"); ?>

			</div>

		 </div>

	<!--<?php get_sidebar(); ?>-->



<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

</div>

<?php get_footer() ?>