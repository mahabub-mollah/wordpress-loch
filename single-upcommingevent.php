<?php get_header();?>




        

         <div class="row container-kamn">  
                <img src="http://placehold.it/1200*400" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 

        </div>
   
    

    <!--End Header -->
    <!-- Main Container -->

    

    


        <section class="upcoming_event_section bdrTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="upcoming_event">
                            
                           


                                <?php

                      

                    


                       
                have_posts();
                          
                the_post();



$upcomingevent_title =get_post_meta( get_the_ID(),'_office-master_upcommingevent_title',true);
$upcomingevent_description=get_post_meta( get_the_ID(),'_office-master_upcommingevent_description',true);
$upcomingevent_ancortitle=get_post_meta( get_the_ID(),'_office-master_upcommingevent_ancortitle',true);
$upcomingevent_ancorlink=get_post_meta( get_the_ID(),'_office-master_upcommingevent_ancorlink',true);

                            
                           
                             ?>




                            <!-- Begin Slide 1 -->
                             <div  class="event-cont">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h1 class="pageTitle"><?php echo $upcomingevent_title;?></h1>
                                    <p><?php echo $upcomingevent_description;?></p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="event-cont-rgt">
                                        <p><i class="fa fa-calendar"></i><?php echo the_date('Y-m-d');?></p>
                                        <p><i class="fa fa-map-marker"></i>Loch LOMMOND VILLA</p>
                                        <div class="event-social">
                                            <a href="#"><img src="images/facebook.png" alt="" /></a>
                                            <a href="#"><img src="images/twitter.png" alt="" /></a>
                                        </div>
                                        <a href="#" class="loch_btn"><i class="fa fa-calendar"></i> Add to google calendar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- End Slide 1 -->



                     






                                   
                             
                      </div>
                        <div class="prevNxt">
                            <a href="#" class="loch_btn">Prev. Page</a>
                            <a href="#" class="loch_btn">Next Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
        <?php get_footer();?>