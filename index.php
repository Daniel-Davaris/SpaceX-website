<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>


<?php
/**
 * The default template for displaying content.
 */
?>

<div class="m-0 outer_container row">
	<div class=" first p-0 col-sm-12 col-md-12 col-lg-12 col-xl-6">
		<?php get_template_part('template-parts/LeftSideBody/StaticContent','StaticContent') ?>
	</div>

	<div id="right_side" class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
		<?php get_template_part('template-parts/navbar','navbar') ?>
		<?php get_template_part('template-parts/RightSideBody/FlexibleContent','navbar') ?>
	</div>
</div>

<?php get_footer(); ?>