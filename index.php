
<?php get_header(); ?>
<?php //print(get_template_directory_uri()); ?>
<div class="cd-intro-block">
		<div class="content-wrapper">
		 <?php 
		 /*
		 	$query = new WP_Query(array( 'posts_per_page' => 5 ));
    	 		while ($query->have_posts()) :
    	  				$query->the_post(); 
    					 the_content(); 
    	 	    endwhile; */
    	?>

			<h1>Linda Shum Portfolio</h1>
			<a href="#0" class='cd-btn' data-action="show-projects">Show projects</a>
		</div>
	</div> <!-- .cd-intro-block -->

	
<div class="cd-projects-wrapper">
		<ul class="cd-slider">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                           <li class="current">
                                <a href='#0'>
                                    <img src='wp-content/themes/squeezebox/img/img.png' alt='project image'>
                                    <div class='project-info'>
                                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                        <p>Description of project</p>
                                    </div>
                                </a>
                            </li>
            <?php endwhile;endif; ?>


		</ul> <!-- .cd-slider-navigation -->
	</div> <!-- .cd-projects-wrapper -->

	<div class="cd-project-content">
		<div>
			<h2>Project title here</h2>
			<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, ullam.</em>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus. 
			</p>
			<p>
				Illum quaerat asperiores aliquam voluptate saepe omnis porro excepturi in atque veritatis sapiente ipsam voluptates iste amet deserunt ullam error pariatur, magni consectetur optio nostrum minima dolorum. Soluta animi nihil doloremque ipsa incidunt vitae architecto beatae, maxime libero, dolore corporis vero porro tenetur ipsam modi repudiandae magnam enim, quibusdam sit.
			</p>
			<p>
				Illum quaerat asperiores aliquam voluptate saepe omnis porro excepturi in atque veritatis sapiente ipsam voluptates iste amet deserunt ullam error pariatur, magni consectetur optio nostrum minima dolorum. Soluta animi nihil doloremque ipsa incidunt vitae architecto beatae, maxime libero, dolore corporis vero porro tenetur ipsam modi repudiandae magnam enim, quibusdam sit.
			</p>
		</div>
		<a href="#0" class="close cd-img-replace">Close</a>
	</div> <!-- .cd-project-content -->
<?php  get_footer() ?>