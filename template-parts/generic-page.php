<div class='page_section container-fluid'>
<div class="p-0 parent container mx-auto ">

<?php if( have_rows('layout2') ): ?>
	<?php while( have_rows('layout2') ): the_row(); ?>	
	
		<?php if( get_row_layout() == '1_row' ): ?>
			<?php get_template_part('Components/2-col-text','2-col-text') ?>
		<?php elseif( get_row_layout() == '2_row' ): ?>
			<?php get_template_part('Components/1-col-text','1-col-text') ?>
		<?php elseif( get_row_layout() == '3_row' ): ?>
			<?php get_template_part('Components/card','card') ?>
		<?php elseif( get_row_layout() == '4_row' ): ?>
			<?php get_template_part('Components/page-title','page-title') ?>
		<?php elseif( get_row_layout() == '5_row' ): ?>
			<?php get_template_part('Components/display-box-2','display-box-2') ?>
	
		<?php endif; ?>	
			
					
	<?php endwhile; ?>	
<?php endif; ?>

</div>
</div>



