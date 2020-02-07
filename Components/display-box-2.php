
				
					<?php if( have_rows('display-box-2') ): ?>
					<?php while( have_rows('display-box-2') ): the_row(); 
						$SubHeading = get_sub_field('sub-heading');
                        $link = get_sub_field('link');
                        $image = get_sub_field('circle-background');
						?>
						<div class="py-5 mx-auto second-circle mb-auto left_sub-heading-row row">
						
                            <div class="left_sub-heading-col left_sub-heading-col-2 text_box col-12 col-sm-12 col-md-12 ">
                                <h1 class="left_sub-heading left_sub-heading-2"><?php the_sub_field('sub-heading'); ?></h1>
                            </div>
                      
                            <div style="background-image:url('<?php echo esc_url( $image['url'] ); ?>');" class="circle circle2">

                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): ?>
                                    <a class="left_link" href="<?php echo esc_url( $link ); ?>">LEARN MORE</a>
                                <?php endif; ?>
                                
                            </div>  
					
					    </div>
										

					<?php endwhile; ?>
					<?php endif; ?>