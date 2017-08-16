<?php get_header();?>


        <section class="upcoming_event_section bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="upcoming_event">
                            <h1 class="pageTitle"><?php the_title();?></h1>
                           


                                <?php
                                 $ourCurrentpage = (get_query_var('paged')) ?get_query_var('paged') : 1;

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'upcommingevent',
                        'posts_per_page'=>2,
                        'order'   =>'ASC',
                        'paged' =>$ourCurrentpage
                       
                        


                        ));

                      if ($ebit_post->have_posts()) {


                       
                        while($ebit_post->have_posts()){
                           echo   $ourCurrentpage;
                    $ebit_post->the_post();



$upcomingevent_title =get_post_meta( get_the_ID(),'_office-master_upcommingevent_title',true);
$upcomingevent_description=get_post_meta( get_the_ID(),'_office-master_upcommingevent_description',true);
$upcomingevent_ancortitle=get_post_meta( get_the_ID(),'_office-master_upcommingevent_ancortitle',true);
$upcomingevent_ancorlink=get_post_meta( get_the_ID(),'_office-master_upcommingevent_ancorlink',true);

                            
                           
                             ?>




                            <!-- Begin Slide 1 -->
                             <div class="single_up_event">
                                <div class="row">
                            
                                     <div class="col-md-3 col-sm-12 pull-right">
                                        <div class="imgBog">
                                     <?php echo the_post_thumbnail('');?>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="up_event_content">
                                            <h3><?php echo $upcomingevent_title;?></h3>
                                            <div class="event_meta">

                                            <?php 

                    if (is_array( $lochmaster['upgevent_ancoricontitle'])) {
                        foreach( $lochmaster['upgevent_ancoricontitle'] as $single_value){
                            ?>

                       
                         

                  <a href="JavaScript:;"><i class="fa <?php echo $single_value['title'];?>"></i><?php  echo the_date("Y-m-d");
                      echo $single_value['description'];?></a>
         
                 <?php  }
                        
                    }
                    //print_r( $lochmaster['upgevent_ancoricontitle']);

                ?>





                                               
                                                
                                            </div>
                                            <p><?php echo $upcomingevent_description;?></p>
                                            <a href="<?php echo the_permalink();?>" class="loch_btn"><?php echo $upcomingevent_ancortitle;?></a>
                                            <div class="share_post">

                                          
                                            <?php 

                    if (is_array( $lochmaster['upevent_img'])) {
                        foreach( $lochmaster['upevent_img'] as $single_value){
                            ?>

                       
                         

                
                  <a href="#"><img src="<?php echo $single_value['image'];?>" alt=""></a>
                  
                 <?php  }
                        
                    }
                     echo do_shortcode ('[shareaholic app="share_buttons" id="27184848"]'); ?>
                    

                



                                                
                                              
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        
                        <!-- End Slide 1 -->



                     <?php

                 }
                  
                 ?>
                 <div class="prevNxt">
                           
                        
            
            <li class="loch_btn"><?php previous_posts_link('prev') ?></li>
        

              
                           
            <li class="loch_btn"><?php next_posts_link( 'next page',$ebit_post->max_num_pages);?></li>
         </div>



            
                            
                        </div>
                        
                     <?php }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>







                                   
                             
                      </div>
                        
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