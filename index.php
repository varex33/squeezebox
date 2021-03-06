
<?php get_header(); ?>
<?php //print(get_template_directory_uri()); ?>
<div class="cd-intro-block">
		<div class="content-wrapper">
			<h1>Linda Shum Portfolio</h1>
			<a href="#0" class='cd-btn' data-action="show-projects">Show projects</a>
		</div>
	</div> <!-- .cd-intro-block -->

	
<div class="cd-projects-wrapper">
		<ul class="cd-slider">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                           <li class="current">
                                <div class="wp-post">
                                <a href='#0'>           
                                <?php
                                	if (has_post_thumbnail()){
                                    	the_post_thumbnail(array('270','300'));                              		
                                	}                        
                                	else{ ?>
                                    <img src='<?php get_template_directory_uri() ?>/img/img.png' alt='project image'>
                                    <?php }?>
                                    <div class='project-info'>
                                        <h2><a href="<?php the_permalink() ?>" class="link" rel="bookmark"
                                         title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                        <p>Description of project</p>
                                        <span>
                                        <?php  
                                             get_template_part( 'content', 'single' );
                                            //$post_object = get_post(get_the_ID());
											 //$post_object->post_content;
                                         ?>
                                         </span>
                                    </div>
                                </a>
                                </div>
                            </li>

            <?php endwhile;endif; ?>

		</ul>
        <ul class="cd-slider-navigation cd-img-replace">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul> <!-- .cd-slider-navigation -->
	</div> <!-- .cd-projects-wrapper -->

	<div class="cd-project-content">
		<div>
        <p></p>
		</div>
		<a href="#0" class="close cd-img-replace">Close</a>
	</div> <!-- .cd-project-content -->
<?php  get_footer() ?>