<?php
/**
 * The template for displaying the footer.
 */
?>
<footer>
    <h1 class="footer_text">© <?php echo date('Y') ?> <?php the_field('title'); ?> </h1>
    
    <input id="scroll_btn" onClick="document.getElementById('new-content-id').scrollIntoView();" class="text-align-center text-center scoll-btn" type="image" src="<?php echo get_template_directory_uri() ?>/images/vector.png" alt="Submit" width="25" height="10">
</footer>                                              
<div id="new-content-id" class="new-content">
</div>
<?php wp_footer(); ?>
</div>  

</body>
</html>