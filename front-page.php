 
       

        <!-- CSS -->
      
       
        
       

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php get_header();?>

        <section class="slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="single_slide">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                

                                <!-- Wrapper for slides -->


                         <div class="carousel-inner" role="listbox">
                          <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'slider',
                        'posts_per_page'=>-1


                        ));
                      if ($ebit_post->have_posts()) {
                        $x=0;
                        while ($ebit_post->have_posts() ) {
                            $x++;
                            $ebit_post->the_post();
                            $slider_caption =get_post_meta( get_the_ID(),'slider_caption',true);
                            ?>

                            <!-- Begin Slide 1 -->
                        <div class="item <?php if ($x==1) {echo'active';
                            
                        }?>">
                            <?php
                            the_post_thumbnail('slide-img');
                            ?>
                            <div class="slider_caption">
                                <h1 ><?php the_title();?></h1>
                                <p><?php echo $slider_caption;?></p>
                                <a class="loch_btn pull-right" href="">READ MORE</a>
                            </div>
                        </div>
                        <!-- End Slide 1 -->



                     <?php
                        }
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                   ?>


               </div>

                            <ol class="carousel-indicators">
                            <?php

                         for ($i=0; $i <$x ; $i++) { ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if ($i==0) {
                            echo"active";}?>"></li>
                        
                      <?php }



                    ?>

                                   
                                    
                                </ol>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="slider_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-7">
                        <div class="sb_content">
                        <h2><?php echo $lochmaster['slidersub_home_title']?></h2>
                            <p><?php echo $lochmaster['slidersub_home_description']?></p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5">
                        <div class="sb_content sb_content02">
                        <h2><?php echo $lochmaster['slidersub_home_title']?></h2>
                            <p><?php echo $lochmaster['slidersub_home_description']?></p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="recent_activites">
            <div class="container">
                <div class="row">
<?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'events',
                        'posts_per_page'=>-1
                        


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        $ebit_post->have_posts() ;
                          
                            $ebit_post->the_post();
                            $icon_main_title=get_post_meta( get_the_ID(),'_office-master_icon_main_title',true);
                           

                            $event_description=get_post_meta( get_the_ID(),'_office-master_event_description',true);
                             $event_ancor_title=get_post_meta( get_the_ID(),'_office-master_event_ancor_title',true);
                             $event_ancor_url=get_post_meta( get_the_ID(),'_office-master_event_ancor_url',true);
                             
                             ?>




                            <!-- Begin Slide 1 -->

                             <div class="col-md-6 col-sm-12 pull-right">
                        <div class="single_activity">
                            <h2><?php the_title();?></h2>
                            <div class="events_update">
                                <?php the_post_thumbnail('card-img');?>
                                <h3 class="hidden-sm hidden-xs"><?php echo $icon_main_title ?></h3>
                                <div class="event_meta">
                                 <?php 

                    if (is_array( $lochmaster['eventicon_home_title'])) {
                        foreach( $lochmaster['eventicon_home_title'] as $single_value){ ?>


                        <?php

                         if ($single_value['title']=='fa-calendar') {?>

                         
                          <a href="<?php echo $single_value['url'] ;?>"><i class="fa <?php echo $single_value['title'] ;?>"></i><?php echo get_the_date('M-d-y');?><?php echo $single_value['description'] ;?></a>
                        <?php }


                        else{?>
                       <a href="<?php echo $single_value['url'] ;?>"><i class="fa <?php echo $single_value['title'] ;?>"></i><?php echo $single_value['description'] ;?></a>
                         <?php }


                         ?>
                         
                         
                       
                  <?php }

                         
                         
                        
                    }
                    //print_r($lochmaster['eventicon_home_title']);

                ?>
                                  
                                    
                         </div>           
                              

                               
                                <p><?php echo $event_description ;?></p>
                                <a class="loch_btn pull-right" href="<?php echo $event_ancor_url;?>"><?php echo $event_ancor_title;?></a>
                            </div>
                        </div>
                    </div>


                             
                        
                        <!-- End Slide 1 -->



                     <?php
                        
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>



                   
                    <div class="clearfix hidden-md hidden-lg hidden-sm"></div>
                    <div class="col-md-6 col-sm-12">

<?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'residents',
                        'posts_per_page'=>-1
                        


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        $ebit_post->have_posts() ;
                          
                            $ebit_post->the_post();
                            $residents_des_title=get_post_meta( get_the_ID(),'_office-master_residents_des_title',true);
                            $residents_description=get_post_meta( get_the_ID(),'_office-master_residents_description',true);
                            $residents_ancor_title=get_post_meta( get_the_ID(),'_office-master_residents_ancor_title',true);
                            $residents_ancor_url=get_post_meta( get_the_ID(),'_office-master_residents_ancor_url',true);

                           
                             ?>




                            <!-- Begin Slide 1 -->

                             <div class="single_activity">
                            <h2><?php the_title();?></h2>
                            <div class="our_residents">
                                <?php the_post_thumbnail('resi-img');?>
                                <h3><?php echo $residents_des_title;?></h3>
                                <p><?php echo $residents_description;?></p>
                            </div>
                            <a class="loch_btn pull-right" href="<?php echo   $residents_ancor_url;?>"><?php echo  $residents_ancor_title;?></a>
                            <div class="clearfix"></div>
                        </div>


                             
                        
                        <!-- End Slide 1 -->



                     <?php
                        
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>




                        
                           <div class="single_activity">
                            <h2><?php echo the_title();?></h2>

                           <div class="row">
                           <div class="col-sm-6 col-xs-6">

                           <?php

                      $loch_post = null;
                      $loch_post = new WP_Query(array(

                        'post_type'=>'other-stories',
                        'posts_per_page'=>-1,
                        'order'=>'ASC'


                        ));
                      if ($loch_post->have_posts()) {
                       
                        while ($loch_post->have_posts() ) {
                          
                           $loch_post->the_post();
                            $other_stories_title=get_post_meta( get_the_ID(),'_office-master_other_stories_title',true);
                           
                            $other_stories_ancor_title=get_post_meta( get_the_ID(),'_office-master_other_stories_ancor_title',true);
                            $other_stories_ancor_url=get_post_meta( get_the_ID(),'_office-master_other_stories_ancor_url',true);



                            ?>




                            <!-- Begin Slide 1 -->
                             <div class="other_stories">
                                        <?php the_post_thumbnail('other-img');?>
                                        <h3><?php echo $other_stories_title ;?></h3>
                                        <a class="loch_btn pull-right" href="<?php echo $other_stories_ancor_url; ?>"><?php echo $other_stories_ancor_title; ?></a>
                                        <div class="clearfix"></div> 
                                    </div>
                                
                        <!-- End Slide 1 -->



                     <?php
                        }
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                       $loch_post = null;
                   ?>
    


                               
                                
                            </div>
                            </div>

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
                           <h1 class="donate_heading"><?php echo $lochmaster['donate_home_title'];?></h1>
                            <p><?php echo $lochmaster['donate_home_description'];?></p>
                            <a class="loch_btn" href="#"><?php echo $lochmaster['donate_home_ancortitle'];?></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="subscription_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center subs_con">
                        <h1>SIGN UP FOR OUR NEWSLETTEr</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at sem nec mauris efficitur 
                            pharetra non.</p>
                    </div>
                    <div class="col-lg-12">

                    
                     <div class="col-lg-12">
                        

                 <?php echo do_shortcode('[contact-form-7 id="331" title="Contact form 1"]');?>


                       
                           
                        
                        <div class="col-lg-12 text-center subs_con hidden-xs">
                            <p>You can unsubscribe at anytime and we will never give your information to anyone else. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
<?php get_footer();?>