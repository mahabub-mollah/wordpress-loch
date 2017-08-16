
<?php global $lochmaster;?>



<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="footer_widget">
                                    <h3><a class="footer_link" href="<?php  echo  $lochmaster['lochcol_1_links']; ?>"><?php  echo  $lochmaster['lochcol_1_title']; ?></a></h3>
                                </div>
                                <div class="footer_widget">
                                  <h3><?php echo $lochmaster['lochcol_2_title']; ?></h3>
                                <?php 

                    if (is_array( $lochmaster['lochcol_2_links'])) {
                        foreach( $lochmaster['lochcol_2_links'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>
                                  
                                   
                                </div>
                                <div class="footer_widget">
                                    <h3><?php echo $lochmaster['lochcol_inspire_title']; ?></h3>
                                    <?php 

                    if (is_array( $lochmaster['lochcol_inspire_links'])) {
                        foreach( $lochmaster['lochcol_inspire_links'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>

                                   
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer_widget">
                                    <h3><?php echo $lochmaster['lochcol_support_title']; ?></h3>

                                    <?php 

                    if (is_array( $lochmaster['lochcol_support_links'])) {
                        foreach( $lochmaster['lochcol_support_links'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer_widget">

                                <h3><?php echo $lochmaster['lochcol_give_title']; ?></h3>

                                    <?php 

                    if (is_array( $lochmaster['lochcol_give_links'])) {
                        foreach( $lochmaster['lochcol_give_links'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>

                                    
                                    
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer_widget">
                                    <h3><?php echo $lochmaster['lochcol_cangive_title']; ?></h3><br>
                                </div>
                                <div class="footer_widget">
                                   <h3><?php echo $lochmaster['lochcol_news_title']; ?></h3>

                                      <?php 

                    if (is_array( $lochmaster['lochcol_news_links'])) {
                        foreach( $lochmaster['lochcol_news_links'] as $single_value){

                       
                         echo '<ul><li><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></li></ul>';
                       
                   }
                        
                    }

                ?>

                                    


                                   
                                </div>
                                <div class="footer_widget">
                                 <h3><?php echo $lochmaster['lochcol_contact_title']; ?></h3>
                                    <div class="hidden-xs">
                                        <a href="<?php echo $lochmaster['lochcol_contact_links']; ?>" class="loch_btn"><?php echo $lochmaster['lochcol_contact_ancor_title']; ?></a>
                                        <div class="footer_social">

                                        <?php 

                    if (is_array( $lochmaster['lochcol_contact_social'])) {
                        foreach( $lochmaster['lochcol_contact_social'] as $single_value){?>

                       
                    
                          <a href="<?php echo $single_value['url'] ?>"><img src="<?php echo $single_value['image'] ;?>" alt="" /></a>
                       
                 <?php  }
                        
                    }
                    //print_r($lochmaster['lochcol_contact_social']);

                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 noPadding">
                        <div class="footer_widget">
                            <div class="hidden-lg hidden-md hidden-sm">
                                <a href="#" class="loch_btn">Donate Now</a>
                            </div>
                            <?php echo $lochmaster['lochcol_lastcol_des'] ; ?>
                            <div class="footer_social hidden-lg hidden-md hidden-sm">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="" /></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text pull-right">
                            <?php  echo  $lochmaster['lochcopyright_text'] ;?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JS -->
     
        
        <?php wp_footer();?>
    </body>
</html>