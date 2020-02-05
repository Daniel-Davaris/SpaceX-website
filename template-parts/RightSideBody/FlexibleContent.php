
<div class='page_section container-fluid'>
<div class="p-0 parent container mx-auto ">

<?php if( have_rows('layout') ): ?>
	<?php while( have_rows('layout') ): the_row(); ?>

		

				<?php if( get_row_layout() == '1_row' ): ?>
					<?php get_template_part('Components/2-col-text','2-col-text') ?>
			
					<?php elseif( get_row_layout() == '2_row' ): ?>
						<?php get_template_part('Components/1-col-text','1-col-text') ?>

					<?php elseif( get_row_layout() == '3_row' ): ?>
						<?php get_template_part('Components/card','card') ?>
					
				<?php endif; ?>
				
					
	<?php endwhile; ?>	
<?php endif; ?>

</div>

</div>

