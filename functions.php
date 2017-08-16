<?php
include_once('inc/loch-cmb2-cutom.php');
include_once('inc/redux-framework-master/redux-framework.php');
include_once('inc/loch_theme_options.php');
function loch_theme_support(){
  
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('slide-img',1500,500,true);
  add_image_size('card-img',560,304,true);
  add_image_size('resi-img',270,206,true);
  add_image_size('other-img',81,59,true);
   add_image_size('blog-img',840,320,true);
    add_image_size('newsmedia-img',408,189,true);
      add_image_size('about-img',560,304,true);
      add_image_size('blog-small-img',413,190,true);
  register_nav_menus(array(


  	'primary_menu'=>'Primary Menu'




  	));
}
add_action('after_setup_theme','loch_theme_support');

function loch_css_js(){
 
 wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css','null','v1.0');
 wp_enqueue_style('fontawesom',get_template_directory_uri().'/css/font-awesome.css','null','v1.0');
 wp_enqueue_style('themestyle',get_template_directory_uri().'/css/style.css','null','v1.0');
 wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css','null','v1.0');
 wp_enqueue_style('main-style',get_stylesheet_uri());


 wp_enqueue_script('jquery');
 wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery','null','true');
 wp_enqueue_script('js',get_template_directory_uri().'/js/custom.js','jquery','null','true');
}
add_action('wp_enqueue_scripts','loch_css_js');



function loch_fallback_menu(){

	?>



<nav>
                            <ul>
                                <li class="has-menu-items"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Sub menu 1</a></li>
                                        <li><a href="#">Sub menu 2</a></li>
                                        <li><a href="#">Sub menu 3</a></li>
                                        <li><a href="#">Sub menu 4</a></li>
                                    </ul>
                                </li>
                                <li class="current-menu-item"><a href="#">About us</a></li>
                                <li><a href="#">Inspiring Stories</a></li>
                                <li><a href="#">Areas of Support</a></li>
                                <li><a href="#">Ways You Can Give</a></li>
                                <li><a href="#">Upcoming Events</a></li>
                                <li><a href="#">News/Media</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    






   <?php 
}
function loch_custompost(){

	register_post_type('slider',array(

		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Slide Menu',
			'all_items'=>'All Slider',
			'add_new'=>'Add New Slide',
			'add_new_item'=>'Add New Slide item'


			),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','custom-fields','page-attributes'
			)




		));
  
register_post_type('events',array(

    'labels'=>array(
      'name'=>'Events',
      'menu_name'=>'Events Menu',
      'all_items'=>'All Events',
      'add_new'=>'Add New Events',
      'add_new_item'=>'Add New events item'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));
register_post_type('residents',array(

    'labels'=>array(
      'name'=>'residents',
      'menu_name'=>'residents Menu',
      'all_items'=>'All residents',
      'add_new'=>'Add New residents',
      'add_new_item'=>'Add New residents item'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));
register_post_type('other-stories',array(

    'labels'=>array(
      'name'=>'other-stories',
      'menu_name'=>'other-stories Menu',
      'all_items'=>'All other-stories',
      'add_new'=>'Add New other-stories',
      'add_new_item'=>'Add New other-stories item'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));
register_post_type('newsmedia',array(

    'labels'=>array(
      'name'=>'newsmedia',
      'menu_name'=>'newsmedia Menu',
      'all_items'=>'All newsmedia',
      'add_new'=>'Add New newsmedia',
      'add_new_item'=>'Add New newsmedia'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));

register_post_type('newsmediablog',array(

    'labels'=>array(
      'name'=>'newsmediablog',
      'menu_name'=>'newsmediablog Menu',
      'all_items'=>'All newsmediablog',
      'add_new'=>'Add New newsmediablog',
      'add_new_item'=>'Add New newsmediablog'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));
register_taxonomy(
                   'newsmediablog_category',
                     'newsmediablog',
                     array(
                      'labels'=>array(
                        'name'=>'newsmediablog Category',
                        'add_new_item'=>'Add new category'


                        ),
                      'hierarchical'=>true,
                      'show_admin_column'=>true

                      )
);
register_post_type('aboutus',array(

    'labels'=>array(
      'name'=>'aboutus',
      'menu_name'=>'aboutus Menu',
      'all_items'=>'All aboutus',
      'add_new'=>'Add New aboutus',
      'add_new_item'=>'Add New aboutus'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','editor','thumbnail'
      )




    ));
register_post_type('aboutussection',array(

    'labels'=>array(
      'name'=>'aboutussection',
      'menu_name'=>'aboutussection Menu',
      'all_items'=>'All aboutussection',
      'add_new'=>'Add New aboutussection',
      'add_new_item'=>'Add New aboutussection'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','editor','thumbnail'
      )




    ));
register_post_type('aboutsub',array(

    'labels'=>array(
      'name'=>'aboutsub',
      'menu_name'=>'aboutsub Menu',
      'all_items'=>'All aboutsub',
      'add_new'=>'Add New aboutsub',
      'add_new_item'=>'Add New aboutsub'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes'
      )




    ));
register_post_type('upcommingevent',array(

    'labels'=>array(
      'name'=>'upcommingevent',
      'menu_name'=>'upcommingevent Menu',
      'all_items'=>'All upcommingevent',
      'add_new'=>'Add New upcommingevent',
      'add_new_item'=>'Add New upcommingevent'


      ),
    'public'=>true,
    'supports'=>array(
      'title','revisions','page-attributes','thumbnail'
      )




    ));





}


add_action('init','loch_custompost');


/*    widgets*/

  function lochsidewidget(){

 register_sidebar(array(

  'name'=>'loch sidecustom sidebar',
  'id' =>'lochosidebar'

  ));

 register_widget('lochsecondwidget');
 
}

add_action('widgets_init','lochsidewidget');


  class lochsecondwidget extends WP_Widget{

  public function __construct(){

    parent:: __construct(

      'aboutuswidget',
      'aboutus widget',
      array(

        'description'=>'This is widget for slider'
                       )

               );
              }



              public function form($instance){ 

                $title =$instance['title'];
               
                $ancortitle=$instance['ancortitle'];
                $ancorlink=$instance['ancorlink'];

                ?>

              <p><label for="<?php echo $this->get_field_id('title');?>">Title</label>
              <input type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" value="<?php echo $title;?>" class="widefat">
              </p>
              
              <p>
                
              <p><label for="<?php echo $this->get_field_name('ancorlink');?>">Ancor Link</label>
              <input type="text" name="<?php echo $this->get_field_name('ancorlink');?>" id="<?php echo $this->get_field_id('ancorlink');?>" value="<?php echo $ancorlink;?>" class="widefat">
              </p>
              <p><label for="<?php echo $this->get_field_name('ancortitle');?>">Ancor text</label>
            <input type="text" name="<?php echo $this->get_field_name('ancortitle');?>" id="<?php echo $this->get_field_id('ancortitle');?>" value="<?php echo $ancortitle;?>" class="widefat">
              </p>
           <?php 

            }
            

              public function widget($args,$instance){

                $title =$instance['title'];
               
                  $ancortitle=$instance['ancortitle'];

                 $widget_value = '<h1 class="donate_heading">'.$title.'</h1>';

                 $widget_value .='<a class="loch_btn" href="<?php echo $ancorlink;?>">'.$ancortitle.'</a>';

                 //$widget_value .=$args['before_title'].$ancorlink.$args['after_title'];

                echo $args['before_widget'].$widget_value.$args['after_widget'];
}



  }


  function lochnewsletter(){

 register_sidebar(array(

  'name'=>'loch newsmedia sidebar',
  'id' =>'lochnewsletter'

  ));


 
}

add_action('widgets_init','lochnewsletter');


  
function wpb_list_child_pages() { 

global $post; 

if ( is_page() && $post->post_parent )

  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

  $string = '<ul>' . $childpages . '</ul>';
}

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');



