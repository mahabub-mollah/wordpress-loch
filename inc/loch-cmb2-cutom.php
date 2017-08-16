<?php
/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}



function loch_cmb2(){

	$pref='_office-master_';

	$event_item = new_cmb2_box( array(
		'id'            => 'event_metabox',
		'title'         => __( 'Event Metabox', 'office_master' ),
		'object_types'  => array( 'events', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$event_item->add_field( array(
		'name'       => __( 'EventDescription', 'cmb2' ),
		'desc'       => __( 'Write here your event dscription', 'office_master' ),
		'id'         =>$pref.'event_description',
		'type'       => 'textarea'
		
	) );
	$event_item->add_field( array(
		'name'       => __( 'Icon Header', 'cmb2' ),
		'desc'       => __( 'Write here your Icon Header', 'office_master' ),
		'id'         =>$pref.'icon_main_title',
		'type'       => 'text'
		
	) );
	$event_item->add_field( array(
		'name'       => __( 'Ancor Title', 'cmb2' ),
		'desc'       => __( 'Write here your Ancor Title', 'office_master' ),
		'id'         =>$pref.'event_ancor_title',
		'type'       => 'text'
		
	) );
	$event_item->add_field( array(
		'name'       => __( 'Ancor url', 'cmb2' ),
		'desc'       => __( 'Write here your Ancor url', 'office_master' ),
		'id'         =>$pref.'event_ancor_url',
		'type'       => 'text'
		
	) );


	$resident_item = new_cmb2_box( array(
		'id'            => 'residents_metabox',
		'title'         => __( 'residents Metabox', 'office_master' ),
		'object_types'  => array( 'residents', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$resident_item->add_field( array(
		'name'       => __( 'Resident Description title', 'cmb2' ),
		'desc'       => __( 'Write here your Resident Description title', 'office_master' ),
		'id'         =>$pref.'residents_des_title',
		'type'       => 'text'
		
	) );
	$resident_item->add_field( array(
		'name'       => __( 'ResidentDescription', 'cmb2' ),
		'desc'       => __( 'Write here your ResidentDescription', 'office_master' ),
		'id'         =>$pref.'residents_description',
		'type'       => 'textarea'
		
	) );
	$resident_item->add_field( array(
		'name'       => __( 'Resident Ancor Title', 'cmb2' ),
		'desc'       => __( 'Write here your Resident Ancor Title', 'office_master' ),
		'id'         =>$pref.'residents_ancor_title',
		'type'       => 'text'
		
	) );
	$resident_item->add_field( array(
		'name'       => __( ' Resident Ancor url', 'cmb2' ),
		'desc'       => __( 'Write here your Resident Ancor url', 'office_master' ),
		'id'         =>$pref.'residents_ancor_url',
		'type'       => 'text'
		
	) );

	$otherstories_item = new_cmb2_box( array(
		'id'            => 'otherstories_metabox',
		'title'         => __( 'otherstories Metabox', 'office_master' ),
		'object_types'  => array( 'other-stories', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
   $otherstories_item->add_field( array(
		'name'       => __( 'otherstories title', 'cmb2' ),
		'desc'       => __( 'Write here your otherstories title', 'office_master' ),
		'id'         =>$pref.'other_stories_title',
		'type'       => 'text'
		
	) );
	$otherstories_item->add_field( array(
		'name'       => __( 'otherstories Ancor Title', 'cmb2' ),
		'desc'       => __( 'Write here your otherstories Ancor Title', 'office_master' ),
		'id'         =>$pref.'other_stories_ancor_title',
		'type'       => 'text'
		
	) );
	$otherstories_item->add_field( array(
		'name'       => __( ' otherstories Ancor url', 'cmb2' ),
		'desc'       => __( 'Write here your otherstories Ancor url', 'office_master' ),
		'id'         =>$pref.'other_stories_ancor_url',
		'type'       => 'text'
		
	) );
	$group_post_meta = new_cmb2_box( array(
		'id'            => 'event_group_post_metabox',
		'title'         => __( 'event_group_post Metabox', 'office_master' ),
		'object_types'  => array('page'),

		
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		'show_on'       =>array(

			'key' =>'id',
			'value'=> 7
            ) 
		
	) );
    $main_field_group=$group_post_meta->add_field( array(
		'name'       => __( 'event_group_post', 'office_master' ),
		'desc'       => __( 'Write here your event_group post', 'office_master' ),
		'id'         =>$pref.'event_group_main',
		'type'       => 'group'
		
	) );
	$group_post_meta->add_group_field($main_field_group, array(
		'name'       => __( 'event icon', 'office_master' ),
		'desc'       => __( 'Write here your event hashlink', 'office_master' ),
		'id'         =>$pref.'eventicon',
		'type'       => 'text'
		
	) );
	$group_post_meta->add_group_field( $main_field_group, array(
		'name'       => __( 'icon_hash title', 'office_master' ),
		'desc'       => __( 'Write here your icon name title', 'office_master' ),
		'id'         =>$pref.'icon_hash_title',
		'type'       => 'text',
		
		
	) );
	$group_post_meta->add_group_field( $main_field_group, array(
		'name'       => __( 'icon title', 'office_master' ),
		'desc'       => __( 'Write here your icon title', 'office_master' ),
		'id'         =>$pref.'icon_title',
		'type'       => 'text',
	
		
	) );
	$newsmedia_item = new_cmb2_box( array(
		'id'            => 'newsmedia_metabox',
		'title'         => __( 'newsmedia Metabox', 'office_master' ),
		'object_types'  => array( 'newsmedia', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
  $newsmedia_item->add_field( array(
		'name'       => __( 'newsmedia title', 'cmb2' ),
		'desc'       => __( 'Write here your newsmedia title', 'office_master' ),
		'id'         =>$pref.'newsmedia_title',
		'type'       => 'text'
		
	) );
  $newsmedia_item->add_field( array(
		'name'       => __( 'newsmedia ancor title', 'cmb2' ),
		'desc'       => __( 'Write here your newsmedia  ancor title', 'office_master' ),
		'id'         =>$pref.'newsmedia_ancor_title',
		'type'       => 'text'
		
	) );
  $newsmedia_item->add_field( array(
		'name'       => __( 'newsmedia ancor url', 'cmb2' ),
		'desc'       => __( 'Write here your newsmedia  ancor url', 'office_master' ),
		'id'         =>$pref.'newsmedia_ancor_url',
		'type'       => 'text'
		
	) );
  $newsmediablog_item = new_cmb2_box( array(
		'id'            => 'newsmediablog_metabox',
		'title'         => __( 'newsmediablog Metabox', 'office_master' ),
		'object_types'  => array( 'post', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
  $newsmediablog_item->add_field( array(
		'name'       => __( 'newsmediablog ancor title', 'cmb2' ),
		'desc'       => __( 'Write here your newsmediablog  ancor title', 'office_master' ),
		'id'         =>$pref.'newsmediablog_ancor_title',
		'type'       => 'text'
		
	) );
  $newsmediablog_item->add_field( array(
		'name'       => __( 'newsmediablog ancor url', 'cmb2' ),
		'desc'       => __( 'Write here your newsmediablog  ancor url', 'office_master' ),
		'id'         =>$pref.'newsmediablog_ancor_url',
		'type'       => 'text'
		
	) );
  $aboutus_item = new_cmb2_box( array(
		'id'            => 'aboutus_metabox',
		'title'         => __( 'aboutus Metabox', 'office_master' ),
		'object_types'  => array( 'aboutus'), 
		
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	) );
  $aboutus_item->add_field( array(
		'name'       => __( 'aboutus title', 'cmb2' ),
		'desc'       => __( 'Write here your aboutus title', 'office_master' ),
		'id'         =>$pref.'lochaboutus__title',
		'type'       => 'text'
		
	) );
	$aboutus_item->add_field( array(
		'name'       => __( 'aboutus smtitle', 'cmb2' ),
		'desc'       => __( 'Write here your aboutus smtitle', 'office_master' ),
		'id'         =>$pref.'lochaboutus__smtitle',
		'type'       => 'text'
		
	) );
	$aboutus_item->add_field( array(
		'name'       => __( 'aboutus des', 'cmb2' ),
		'desc'       => __( 'Write here your aboutus smtitle', 'office_master' ),
		'id'         =>$pref.'lochaboutus__des',
		'type'       => 'textarea'
		
	) );
	$aboutussection_item = new_cmb2_box( array(
		'id'            => 'aboutussection_metabox',
		'title'         => __( 'aboutussection Metabox', 'office_master' ),
		'object_types'  => array( 'aboutussection', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$aboutussection_item->add_field( array(
		'name'       => __( 'aboutussection maintitle', 'cmb2' ),
		'desc'       => __( 'Write here your aboutussection maintitle', 'office_master' ),
		'id'         =>$pref.'aboutussection_maintitle',
		'type'       => 'text'
		
	) );
  $aboutussection_item->add_field( array(
		'name'       => __( 'aboutussection title', 'cmb2' ),
		'desc'       => __( 'Write here your aboutussection title', 'office_master' ),
		'id'         =>$pref.'aboutussection_title',
		'type'       => 'text'
		
	) );
  $aboutussection_item->add_field( array(
		'name'       => __( 'aboutussection designation', 'cmb2' ),
		'desc'       => __( 'Write here your aboutussection designation', 'office_master' ),
		'id'         =>$pref.'aboutussection_designation',
		'type'       => 'text'
		
	) );
	$aboutussection_item->add_field( array(
		'name'       => __( 'aboutussection description', 'cmb2' ),
		'desc'       => __( 'Write here your aboutussection description', 'office_master' ),
		'id'         =>$pref.'aboutussection_description',
		'type'       => 'textarea'
		
	) );
	$aboutsub_item = new_cmb2_box( array(
		'id'            => 'aboutsub_metabox',
		'title'         => __( 'aboutsub Metabox', 'office_master' ),
		'object_types'  => array( 'aboutsub', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
  $aboutsub_item->add_field( array(
		'name'       => __( 'aboutsub title', 'cmb2' ),
		'desc'       => __( 'Write here your aboutsub title', 'office_master' ),
		'id'         =>$pref.'aboutsub_title',
		'type'       => 'text'
		
	) );
  $aboutsub_item->add_field( array(
		'name'       => __( 'aboutsub designation', 'cmb2' ),
		'desc'       => __( 'Write here your aboutsub designation', 'office_master' ),
		'id'         =>$pref.'aboutsub_designation',
		'type'       => 'text'
		
	) );
  $aboutsub_item->add_field( array(
		'name'       => __( 'aboutsub description', 'cmb2' ),
		'desc'       => __( 'Write here your aboutsub description', 'office_master' ),
		'id'         =>$pref.'aboutsub_description',
		'type'       => 'textarea'
		
	) );

  $upevent_item = new_cmb2_box( array(
		'id'            => 'upevent_metabox',
		'title'         => __( 'upevent Metabox', 'office_master' ),
		'object_types'  => array( 'upcommingevent', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
  $upevent_item->add_field( array(
		'name'       => __( 'upevent title', 'cmb2' ),
		'desc'       => __( 'Write here your upevent title', 'office_master' ),
		'id'         =>$pref.'upcommingevent_title',
		'type'       => 'text'
		
	) );
  $upevent_item->add_field( array(
		'name'       => __( 'upevent des', 'cmb2' ),
		'desc'       => __( 'Write here your upevent title', 'office_master' ),
		'id'         =>$pref.'upcommingevent_description',
		'type'       => 'textarea'
		
	) );
  $upevent_item->add_field( array(
		'name'       => __( 'upevent ancor title', 'cmb2' ),
		'desc'       => __( 'Write here your ancor title', 'office_master' ),
		'id'         =>$pref.'upcommingevent_ancortitle',
		'type'       => 'text'
		
	) );
  $upevent_item->add_field( array(
		'name'       => __( 'upevent ancor link', 'cmb2' ),
		'desc'       => __( 'Write here your ancor link', 'office_master' ),
		'id'         =>$pref.'upcommingevent_ancorlink',
		'type'       => 'text'
		
	) );
	

}
add_action('cmb2_admin_init','loch_cmb2');
