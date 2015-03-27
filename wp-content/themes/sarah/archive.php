<?php get_header(); ?>

<div id="container">
		<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; ?>
		<?php if (is_category()) { ?>
			<h4 class="archives">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>
		<?php } elseif( is_tag() ) { ?>
			<h4 class="archives">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
		<?php } elseif (is_day()) { ?>
			<h4 class="archives">Archives for <?php the_time('F jS, Y'); ?></h4>
		<?php } elseif (is_month()) { ?>
			<h4 class="archives">Archives for <?php the_time('F, Y'); ?></h4>
		<?php } elseif (is_year()) { ?>
			<h4 class="archives">Archives for <?php the_time('Y'); ?></h4>
		<?php } elseif (is_author()) { ?>
			<h4 class="archives"><?php _e('[:en]Author Archive[:fr]Archive Par Auteur'); ?></h4>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h4 class="archives">Blog Archives</h4>
		<?php } ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<div class="inner">
				 <div class="date_cal"> 
				    <div class="date"><?php the_time ('j'); ?></div> 
				    <div class="month"><?php the_time ('M'); ?></div> 
				</div> 

				<div class="postinfo">Posted by <?php the_author(); ?> &#187; <a href="<?php the_permalink() ?>#comments"><?php comments_number('Add Comment &#187;','1 Comment &#187;','% Comments &#187;'); ?></a></div>


		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content("[Read more &rarr;]"); ?>
	 	 </div>
</div>
	<?php get_sidebar(); ?>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
<div style="clear:both;"></div>
<div class="postnav"><?php posts_nav_link(); ?></div>
</div>
<?php get_footer() ?>