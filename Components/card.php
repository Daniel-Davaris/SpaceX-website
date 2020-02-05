
<?php if( have_rows('card') ): ?>
    <div class="mx-auto cards row justify-content-center">


<?php while( have_rows('card') ): the_row(); 
    $image = get_sub_field('image');
    $size = 'right-image-size';
    $title = get_sub_field('title');
    $para = get_sub_field('para');
    ?>

        <div class="center-block mx-auto col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
            <div class="small_img_container">
                <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </div>
            <h5 class="c-title"><?php the_sub_field('title'); ?></h5>
            <p class="c-text"><?php the_sub_field('para'); ?></p>
        </div>
  

<?php endwhile; ?>


</div>  
<?php endif; ?> 



