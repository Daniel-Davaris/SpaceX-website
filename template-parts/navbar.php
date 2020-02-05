<div>

	<header>
		
	<nav class="navbar">
		<?php if( get_field('background-image_') ): ?>
			<a class="navbar-brand" href="<?php echo get_template_directory_uri() ?>../../../../"><img id='logo'src="<?php the_field('logo'); ?>"/></a>
		<?php endif; ?>
			
		
		<?php wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu'
	  ) ); ?>
	<div id="nav-btn">
		<h1 id="cls"class="hide cls">Close</h1>
		<input id="box" type="checkbox" />
		<span></span>
		<span></span>
		<span></span>
		<div class="mx-auto navigation-container">
		<?php wp_nav_menu( array( 
				'theme_location' => 'secondary',
				'container' => false,
				'menu_class' => 'burg nav-ul'
		) ); ?>
		  </div>
	</div>
							
	
                                    
	</nav>

    </header>