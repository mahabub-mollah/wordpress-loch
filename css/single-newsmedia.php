<?php get_header();?>





<section class="blog_section bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-9">

                    <?php

                
                    if (have_posts()) {
                       
                        while (have_posts() ) {
                          
                            the_post();
                            //$post_icon=get_post_meta( get_the_ID(),'_office-master_loch_post_icon',true);
                            




                            ?>




                            <!-- Begin post 1 -->
                             <div class="bolgPost_wrap">
                            <h1 class="pageTitle"><?php the_title();?></h1>
                          <?php the_post_thumbnail('blog-img');?>
                            <div class="post_meta">
                                <a href="#"><i class="fa fa-user"></i>Admin</a>
                                <a href="#"><i class="fa fa-calendar"></i><?php get_the_date('Y-m-d');?></a>
                                <a href="#"><i class="fa fa-bars"></i>events, fundraising</a>
                            </div>
                            <p><?php echo the_content();?></p>
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
                    

                   <div class="preNxt">
                            

                            <li class="loch_btn"><?php next_posts_link( 'Prev.Event' ); ?></li>
                            <li class="loch_btn"><?php previous_posts_link( 'Next Event' ); ?></li>
                    </div>

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
                            <h2>Archive</h2>
                            <span>2016</span>
                            <ul>
                                <li><a href="#">January (1)</a></li>
                                <li><a href="#">February (9)</a></li>
                                <li><a href="#">March (3)</a></li>
                                <li><a href="#">April (4)</a></li>
                                <li><a href="#">June (12)</a></li>
                                <li><a href="#">July (5)</a></li>
                                <li><a href="#">August (7)</a></li>
                                <li><a href="#">September (6)</a></li>
                                <li><a href="#">October (8)</a></li>
                                <li><a href="#">November (1)</a></li>
                            </ul>
                        </aside>
                        <aside class="widget">
                            <h2>Categories</h2>
                            <ul> 
                                <li><a href="#">Events (1)</a></li>
                                <li><a href="#">Fundraising (9)</a></li>
                                <li><a href="#">Health Care (3)</a></li>
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