<?php get_header();

/*

Template Name: Lochnewsmedia Template

*/?>

 <?php

                
                    if (have_posts()) {
                       
                        while (have_posts() ) {
                          
                            the_post();
                            //$post_icon=get_post_meta( get_the_ID(),'_office-master_loch_post_icon',true);
                            




                            ?>




                            <!-- Begin post 1 -->
                             <div class="bolgPost_wrap">
                            <h1 class="pageTitle"><?php the_title();?></h1>
                          <?php the_post_thumbnail();?>
                            <div class="post_meta">
                                <a href="#"><i class="fa fa-user"></i>Admin</a>
                                <a href="#"><i class="fa fa-calendar"></i><?php echo get_the_date('Y-m-d H:i:s')?></a>
                                <a href="#"><i class="fa fa-bars"></i>events, fundraising</a>
                            </div>
                            <p><?php echo the_content();?></p>
                            <a href="#" class="loch_btn">Read more</a>
                            <div class="share_post pull-right">
                                <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/facebook2.png" alt="" /></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/twitter2.png" alt="" /></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/message.png" alt="" /></a>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                            
                        <!-- End post  1 -->



                     <?php
                        }
                       ?>
                    

                   

                     <?php }else{
                        echo "No post";
                      }
                      
                   ?>         




      
	



         <?php get_footer();?>