<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="meta">
		<div class="row collapse">
			<div class="small-9 columns"><?php the_category(", "); ?></div>
			<div class="small-3 columns text-right"><?php the_date(); ?></div>
		</div>
	</div>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php get_template_part('template-parts/img'); ?>



	<div class="entry-content">
		<div class="row">

			<?php do_action('my_gallery', 'gallery'); ?>

 		</div>
 +			<?php do_action ('my_gallery'); ?>
 +			<?php /* The loop */
 +				if ( get_post_gallery() ) :
 +					$gallery = get_post_gallery( get_the_ID(), false );
 +
 +	            /* Loop through all the image and output them one by one */
 +	            foreach( $gallery['src'] as $src ) : ?>
 +	                <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
 +	                <?php
 +	            endforeach;
 +				endif;
 +			?>
 +
 +		</div>
