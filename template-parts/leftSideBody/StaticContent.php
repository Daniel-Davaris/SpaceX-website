<div class="m-0 img_container" style="background-image:url('<?php the_field('background-image_'); ?>'">
		
				<?php if( have_rows('display-box') ): ?>
					<?php while( have_rows('display-box') ): the_row(); 
						$pos = get_sub_field('display-box-vertical-position');
						$Heading = get_sub_field('heading');
						$SubHeading = get_sub_field('sub-heading');
						$link = get_sub_field('learn-more-link');
						?>
		
						<?php if( esc_html($pos['label']) == 't'): ?>
							<?php get_template_part('Components/display-box-top','display-box-top') ?>
						<?php elseif( esc_html($pos['label']) == 'b'): ?>
							<?php get_template_part('Components/display-box-bottom','display-box-bottom') ?>
						<?php endif; ?>

					<?php endwhile; ?>
					<?php endif; ?>
</div>	
