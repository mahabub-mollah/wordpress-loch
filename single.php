<?php get_header();?>





<section class="blog_section bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-9">

                    <?php

                
                    if (have_posts()) {
                       
                        while (have_posts() ) {
                          
                            the_post();
                            $post_icon=get_post_meta( get_the_ID(),'_office-master_loch_post_icon',true);
                            




                            ?>




                            <!-- Begin post 1 -->
                             <div class="bolgPost_wrap">
                            <h1 class="pageTitle"><?php the_title();?></h1>
                          <?php the_post_thumbnail('blog-img');?>
                            <div class="post_meta">
                                <a href="#"><i class="fa fa-user"></i>Admin</a>
                                <a href="#"><i class="fa fa-calendar"></i><?php echo get_the_date('Y-m-d H:i:s');?></a>
                                <a href="#"><i class="fa fa-bars"></i>events, fundraising</a>
                            </div>
                            <p><?php echo the_content();?></p>
                            <div class="share_post pull-right">
                                <?php echo do_shortcode ('[shareaholic app="share_buttons" id="27184848"]'); ?>

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
                        
                       
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <aside class="widget widget_bg">
                            <div class="wd_content">
                                <h2>News/Media</h2>
                                <ul>
                                    <li><a href="#">In the News</a></li>
                                    <li><a href="#">Press Releases</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget">
                         
                            <span><?get_the_date('Y');?></span>
                        
                           
                            <ul> 
                                <?php dynamic_sidebar('lochosidebar') ?>
                            </ul>
                       
                            
                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>



        <section class="donate_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center noPadding">
                        <div class="donate_con">
                            <h1>You can help improve the quality of life for the <br />residents and families of Loch 
                                Lomond Villa</h1>
                            <a class="loch_btn" href="#">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        




























<?php get_footer();?>