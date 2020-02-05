<div class="m-0 img_container" style="background-image:url('<?php the_field('background-image_'); ?>'">
				<div class="left_content">
						<div class="ml-auto left_heading-row row">
							<div class="left_heading-row col">
								<h1 class="left_heading"><?php the_field('heading'); ?></h1>
							</div>
						</div>
						<div class="ml-auto mb-auto left_sub-heading-row row">
							<div class="left_sub-heading-col text_box col-12 col-sm-12 col-md-8 ">
								
								<h1 class="left_sub-heading"><?php the_field('sub-heading'); ?></h1>
							</div>
					
							<div class="circle">

								<?php 
								$link = get_field('learn-more-link');
								if( $link ): ?>
									<a class="left_link" href="<?php echo esc_url( $link ); ?>">LEARN MORE</a>
								<?php endif; ?>
								
							</div>  
						
						</div>
				</div>
</div>
