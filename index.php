<?php get_header();?>

        <section class="blog_section newsMedia_section bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-9">

                    <?php

                
                    $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'post',
                        
                     
                       
                        


                        ));
                        


                    
                      if( $ebit_post->have_posts()) {
                       
                         $ebit_post->have_posts();

                            $ebit_post->the_post();

            
               
                $newsmediablog_ancor_title=get_post_meta( get_the_ID(),'_office-master_newsmediablog_ancor_title',true);

                $newsmediablog_ancor_url=get_post_meta( get_the_ID(),'_office-master_newsmediablog_ancor_url',true);

               




                            ?>




                            <!-- Begin post 1 -->

                              <div class="bolgPost_wrap">
                            <h1 class="pageTitle"><?php the_title();?></h1>
                          <?php the_post_thumbnail('blog-img');?>
                            <div class="post_meta">
                                <a href="#"><i class="fa fa-user"></i>Admin</a>
                                <a href="#"><i class="fa fa-calendar"></i>NOV 4th, 2016</a>
                                <a href="#"><i class="fa fa-bars"></i>events, fundraising</a>
                            </div>
                            <p><?php the_content();?></p>
                            <a href="<?php the_permalink();?>" class="loch_btn"><?php echo $newsmediablog_ancor_title; ?></a>
                            <div class="share_post pull-right">

                            <?php echo do_shortcode ('[shareaholic app="share_buttons" id="27184848"]'); ?>

                               
                               
                            </div>
                            <div class="clearfix"></div>
                        </div>  


                            
                        <!-- End post  1 -->



                     <?php
                 
                      

                      }else{
                        echo "No post";
                      }
                       wp_reset_postdata();
                   ?>





                      

                        <div class="row">
                        <?php

                
                    
                            
                      $ourCurrentpage = get_query_var('paged');
                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'post',
                        'paged' =>$ourCurrentpage,
                        'posts_per_page'=>2
                       
                        


                        ));
                        


                    
                      if( $ebit_post->have_posts()) {
                       
                        while( $ebit_post->have_posts()){

                            $ebit_post->the_post();

            
               
                $newsmediablog_ancor_title=get_post_meta( get_the_ID(),'_office-master_newsmediablog_ancor_title',true);

                $newsmediablog_ancor_url=get_post_meta( get_the_ID(),'_office-master_newsmediablog_ancor_url',true);

               




                            ?>




                            <!-- Begin post 1 -->

                             <div class="col-sm-6">
                                <div class="single_news">
                                    <?php the_post_thumbnail('blog-small-img');?>
                                    <h3><?php the_title();?></h3>
                                    <div class="news_meta clearfix">
                                        <a href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a href="#"><i class="fa fa-bars"></i>events, fundraising</a>
                                        <a href="#"><i class="fa fa-calendar"></i>NOV 4th, 2016</a>
                                    </div>
                                  <a href="<?php the_permalink();?>" class="loch_btn"><?php echo $newsmediablog_ancor_title ;?></a>
                                    <div class="share_post pull-right">
                                        <?php echo do_shortcode ('[shareaholic app="share_buttons" id="27184848"]'); ?>
                                    </div>
                                </div>
                            </div>
                            
                           

                            
                        <!-- End post  1 -->



                     <?php
                 } 
                 the_posts_pagination(array(

                            'prev_text'=>'«',
                            'next_text'=>'»',
                            'mid_size'=>3

                            ));?>
                       <div class="preNxt">
                           <li class="loch_btn"> <?php next_posts_link( 'previous.Event', $ebit_post->max_num_pages); ?></li>
                <li class="loch_btn"><?php previous_posts_link( 'Next Event',$ebit_post->max_num_pages ); ?></li>
                            </div>

                        
                     <?php }else{
                        echo "No post";
                      }
                       wp_reset_postdata();
                   ?>
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <aside class="widget widget_bg">
                            <div class="wd_content">
                              <?php  dynamic_sidebar('lochnewsletter');?>
                                
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
                            <h1><?php echo $lochmaster['donate_home_title'];?></h1>
                           <a class="loch_btn" href="#"><?php echo $lochmaster['donate_home_ancortitle'];?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer();?>