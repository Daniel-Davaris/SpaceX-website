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


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#scroll_btn').click(function() {
                    $('body,html').css('overflow','visible');
                    
                    
                });

                $("#box").change( function(){
                    
                    
                    $('#cls').delay(1000).toggleClass('hide');
                    $('#cls').fadeToggle('slow');
                   
                });
                
                
                
                $('#cls').click(function() {
                  
                    console.log("worked")
                  
            
                    $('#nav-btn > input').prop("checked", false);
                    $('#cls').delay(1000).toggleClass('hide');
                    $('#cls').fadeToggle('slow');
                    
                });

              
                
            });
    </script>

</body>
</html>