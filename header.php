<?php global $lochmaster; ?>




<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset=<?php bloginfo('charset')?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head();?>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-3">
                        <div class="logo">
                            <a href="<?php echo site_url();?>"><img src="<?php echo $lochmaster['lochsite_logo']['url'];?>" width="100" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-11 col-sm-10 col-xs-9">
                        <div class="nav_top pull-right">
                            
                               <a class="loch_btn" href="<?php echo$lochmaster['lloch_head_ancor_link'];?>"><?php echo$lochmaster['loch_head_ancor_title'];?></a>
                            
                            <ul class="hidden-xs">

                                        <?php 

                    if (is_array( $lochmaster['lochcol_header_social'])) {
                        foreach( $lochmaster['lochcol_header_social'] as $single_value){?>

                       
                    
                         


                            <li><a href="<?php echo $single_value['url'] ?>"><img src="<?php echo $single_value['image'] ;?>" alt="" /></a></li>
                       
                 <?php  }
                        
                    }
                    //print_r($lochmaster['lochcol_contact_social']);

                ?>
                               
                            </ul>
                        </div>
                        <div class="clearfix"></div>

                        

                        <nav>
            <?php wp_nav_menu(array(

                          'theme_location'=>'primary_menu',
                          'fallback_cb'=>'loch_fallback_menu',
                          'container'=>'',
                          'menu_class'=>'has-menu-items'
                            
                        ));?>


    
                            
                        </nav>
                       
                    </div>
                    <div class="mobile_menu_wrap col-xs-12 hidden-lg hidden-sm hidden-md">
                        <nav>
                            <div class="mobile_menu loch_btn pull-right">
                                <a href="javascript:void(0)">Menu</a>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items"><a href="javascript:void(0)">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Sub menu 1</a></li>
                                        <li><a href="#">Sub menu 2</a></li>
                                        <li><a href="#">Sub menu 3</a></li>
                                        <li><a href="#">Sub menu 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Inspiring Stories</a></li>
                                <li><a href="#">Areas of Support</a></li>
                                <li><a href="#">Ways You Can Give</a></li>
                                <li><a href="#">Upcoming Events</a></li>
                                <li><a href="#">News/Media</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>

         

                    </div>
                </div>
            </div>
        </header>
