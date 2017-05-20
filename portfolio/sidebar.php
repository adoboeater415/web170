			<!-- side content -->
            <div id="side">
               
               <h2>
               		<?php 
				   
				   if(is_page()) { 
					   
					   echo get_the_title($post->post_parent); // get parent title
					   
				   } else {
					   
					   echo 'Entries';
					   
				   }
				   
				   ?>
               </h2>
               
               <p>It's all about 'em CHICKEN NUGGETS!</p>
               
               
               <ul>
				   <?php
				   
				   if(is_page()) { // if on page
					   
				   	if($post->post_parent) { // if this page has a parent
						
					wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent)); // this will list the children
					
					} else { // if on parent page
						
						wp_list_pages(array('title_li' => '', 'child_of' => $post->ID));
						
					}
				   
				   } else { // if on a different page
				   
				   	wp_list_categories(array('title_li' => 'Blog')); // blog categories
				   
				   }
					   
				   ?>
               </ul>
                
            </div>
            <!-- side content ends -->