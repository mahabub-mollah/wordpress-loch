<?php get_header();

/*

Template Name: LochAboutus Template

*/



?>


        <section class="our_board bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                    <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'aboutus',
                        'posts_per_page'=>-1,
                        'order'=>'ASC'

                       
                        


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        $ebit_post->have_posts();
                          
                            $ebit_post->the_post();
                            $aboutus__title=get_post_meta( get_the_ID(),'_office-master_lochaboutus__title',true);
                            $aboutus_smtitle=get_post_meta( get_the_ID(),'_office-master_lochaboutus__smtitle',true);
                            $aboutus_description=get_post_meta( get_the_ID(),'_office-master_lochaboutus__des',true);
                            
                            
                           
                             ?>




                            <!-- Begin Slide 1 -->

                             
                 <h1 class="pageTitle"><?php echo $aboutus__title ?></h1>
                            
                  <h3><?php echo $aboutus_smtitle; ?></h3>
                  <p> <?php echo $aboutus_description; ?></p>
                  <div class="imgBox">
                            <?php echo the_post_thumbnail('about-img'); ?>
                        </div>

                             
                        
                        <!-- End Slide 1 -->



                     <?php

                        
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>






                      
                       
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                         


                            <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'aboutussection',
                        'posts_per_page'=>-1,
                       
                        


                        ));

                      if ($ebit_post->have_posts()) {


                       
                        while($ebit_post->have_posts()){
                          
                    $ebit_post->the_post();

                      	 $aboutussection_maintitle =get_post_meta( get_the_ID(),'_office-master_aboutussection_maintitle',true);
                        
       
        $aboutussection__title=get_post_meta( get_the_ID(),'_office-master_aboutussection_title',true);
        $aboutussection_designation=get_post_meta( get_the_ID(),'_office-master_aboutussection_designation',true);
        $aboutussection_description=get_post_meta( get_the_ID(),'_office-master_aboutussection_description',true);
        
                            
                           
                             ?>




                            <!-- Begin Slide 1 -->
                            
                                    <h3><?php echo $aboutussection_maintitle; ?></h3>
                                

                             
                   <div class="col-sm-4">

                                <div class="single">
                                    <h4><?php echo $aboutussection__title;?>
                                    <span>(<?php echo  $aboutussection_designation;?>)</span></h4>
                                    <p><?php echo $aboutussection_description;?></p>
                                </div>
                               
                              </div>

                             
                        
                        <!-- End Slide 1 -->



                     <?php
                 }
                        
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>




                        </div>
                          
                        </div>
                        <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'aboutsub',
                        'posts_per_page'=>-1,
                       
                        


                        ));

                      if ($ebit_post->have_posts()) {
                       
                        $ebit_post->have_posts();
                          
                    $ebit_post->the_post();
                        

        $aboutsub__title=get_post_meta( get_the_ID(),'_office-master_aboutsub_title',true);
        $aboutsub_designation=get_post_meta( get_the_ID(),'_office-master_aboutsub_designation',true);
        $aboutsub_description=get_post_meta( get_the_ID(),'_office-master_aboutsub_description',true);
        
                            
                           
                             ?>




                            <!-- Begin Slide 1 -->

                             
                       <div class="contBtm">
                            <h3><?php echo $aboutsub__title ;?></h3>
                            <span>(<?php echo $aboutsub_designation ;?>) </span>
                            <p><?php echo $aboutsub_description ;?></p>
                            
                        </div>

                             
                        
                        <!-- End Slide 1 -->



                     <?php
                 
                        
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                      $ebit_post = null;
                   ?>

                        
                    </div>

                    <!--<div class="col-sm-3">
                        <aside class="widget widget_bg">
                            <img src="images/widget_img.png" alt="" />
                            <div class="wd_content">
                                <h2>News/Media</h2>
                                <ul>
                                    <li><a href="#">Our Impact</a></li>
                                    <li><a href="#">our staff</a></li>
                                    <li><a href="#">Our board</a></li>
                                    <li><a href="#">our values</a></li>
                                    <li><a href="#">our donors</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>-->
                    <div class="col-sm-3">
                        <aside class="widget widget_bg">
                            <div class="wd_content">
                             <h2><?php echo $lochmaster['about_sub_maintitle'];?></h2>
                                
                             <?php 

                    if (is_array( $lochmaster['about_sub_title'])) {
                        foreach( $lochmaster['about_sub_title'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>
                                 
                            </div>
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

    








<?php
 
    $post = get_post($_POST['id']);
 
?>
    <div id="single-post post-<?php the_ID(); ?>">
 
    <?php while (have_posts()) : the_post(); ?>
 
                <?php the_title();?>
 
                <?php the_content();?>
 
    <?php endwhile;?> 
 
    </div>
 

        <?php get_footer();?>
