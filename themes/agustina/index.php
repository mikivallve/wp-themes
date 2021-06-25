<?php get_header(); ?>

<?php
if (has_post_thumbnail()) {
	$featured_url = get_the_post_thumbnail_url();
} else {
	$featured_url = esc_url(get_stylesheet_directory_uri()) . "/img/sven-concert.png";
}
?>

<div class="container-fluid hero-image slider-index" style="background-image: url(<?php echo $featured_url; ?>);">
	<h1 class="text-light fw-bold hero-title"><?php the_title() ?></h1>
</div>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>