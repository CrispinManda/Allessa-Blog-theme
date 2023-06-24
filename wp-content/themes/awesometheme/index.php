<?php get_header(); ?>


<div class="row" style="background-color: #cdcdcd;">

	
	<div class="col-xs-12 col-sm-8">
	    <div class="row text-center no-margin">
	        <?php 
	        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
	        $args = array('posts_per_page' => 6, 'paged' => $currentPage);
	        query_posts($args);
	        if( have_posts() ): $i = 0;
	            while( have_posts() ): the_post(); 
	                if ($i < 3): ?>
	                    <?php if($i==0): $column = 12; $class = '';
	                        elseif($i > 0 && $i <= 2): $column = 6; $class = ' second-row-padding';
	                        endif;
	                    ?>
	                    <div class="col-xs-<?php echo $column; echo $class; ?> blog-item">
	                        <?php if( has_post_thumbnail() ):
	                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	                        endif; ?>
	                        <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>); ">
	                            <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	                            <div class="entry-meta">
	                                <bold><?php the_author(); ?></bold>
	                                <br>
	                                <bold><?php the_date(); ?></bold>
	                            </div>
	                        </div>
	                    </div>
					
						
	                <?php else: ?>
					
						
	                    <div>
	                        <?php if (has_post_thumbnail()) : ?>
	                            <div style="float:left; margin-right:20px;">
	                                <?php the_post_thumbnail('thumbnail'); ?>
									
	                            </div>
								
	                        <?php endif; ?>
							
							
	                       
	                        <div class="entry-meta" style="background-color:white;border-radius:20px;">
							    <h4><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h4>
	                            <bold><?php the_author(); ?></bold>
	                            <br>
	                            <small><?php the_date(); ?></small>
								<?php the_excerpt(); ?>
	                            <a href="<?php the_permalink(); ?>">Read More...</a>
	                        </div>

                        <!-- <hr style="border-top: 1px solid black; font-weight: bold;"> -->
	                    </div>
	                <?php endif; ?>
	            <?php $i++; endwhile; ?>
				
					
				<div class="col-xs-6 text-left">
					<?php next_posts_link('« Older Posts'); ?>
				</div>
				<div class="col-xs-6 text-right">
					<?php previous_posts_link('Newer Posts »'); ?>
				</div>
				
			<?php endif;
					wp_reset_query();
			?>
			</div>
		
		</div>
		
		
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
	
	<?php get_footer(); ?>
