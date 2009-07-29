<?php
/*
Plugin Name: HopPress
Version: 1.0
Plugin URI: http://eaglehawkdesign.com
Description: This plugin will allow you to display a text link block with your affiliate ID on your site as a configurable widget. The widget can be added via the Appearance-->Widgets page in the WP-Admin are of your Wordpress site.
Author: Dan O'Riordan
Author URI: http://danriordan.net
*/

$pluginpath = str_replace(str_replace('\\', '/', ABSPATH), get_settings('siteurl').'/', str_replace('\\', '/', dirname(__FILE__))).'/';


//Anything you echo in this functionu will be placed in the pages header.  To use this function, you must uncomment this line at the bottom of this file: add_action('wp_head', 'hoppress_header');
function hoppress_header()
{
	
//reserved.. not in use


}

//This is a wrapper for the main function, which grabs the parameters from a direct function call, or from the options database.  The first parameter is important, because it allows you to have the direct data returned.  I use this to insert a plugin contents into a post with the content_hoppress function. If you don't pass any other arguments, the options will be pulled from those set in the options panel.
function hoppress($echo = 'true',
	$parameter1 = '',
	$parameter2 = '',
	$parameter3 = '',
	$parameter4 = '',
	$parameter5 = '',
	$parameter6 = '',
	$parameter7 = '',
	$parameter8 = '',
	$parameter9 = '',
	$parameter10 = '',
	$parameter11 = '',
	$parameter12 = '',
	$parameter13 = '',
	$parameter14 = ''
	)
{
	$options = get_option('hoppress');
	$parameter1 = (($parameter1 != '') ? $parameter1 : $options['parameter1']);
	$parameter2 = (($parameter2 != '') ? $parameter2 : $options['parameter2']);
	$parameter3 = (($parameter3 != '') ? $parameter3 : $options['parameter3']);
	$parameter4 = (($parameter4 != '') ? $parameter4 : $options['parameter4']);
	$parameter5 = (($parameter5 != '') ? $parameter5 : $options['parameter5']);
	$parameter6 = (($parameter6 != '') ? $parameter6 : $options['parameter6']);
	$parameter7 = (($parameter7 != '') ? $parameter7 : $options['parameter7']);
	$parameter8 = (($parameter8 != '') ? $parameter8 : $options['parameter8']);
	$parameter9 = (($parameter9 != '') ? $parameter9 : $options['parameter9']);
	$parameter10 = (($parameter10 != '') ? $parameter10 : $options['parameter10']);
	$parameter11 = (($parameter11 != '') ? $parameter11 : $options['parameter11']);
	$parameter12 = (($parameter12 != '') ? $parameter12 : $options['parameter12']);
	$parameter13 = (($parameter13 != '') ? $parameter13 : $options['parameter13']);
	$parameter14 = (($parameter14 != '') ? $parameter14 : $options['parameter14']);
	if($echo)
	{
		echo hoppress_return (
		$parameter1, 
		$parameter2, 
		$parameter3,
		$parameter4,
		$parameter5,
		$parameter6,
		$parameter7,
		$parameter8,
		$parameter9,
		$parameter10,
		$parameter11,
		$parameter12,
		$parameter13,
		$parameter14		
		);
	}
	else
	{
		return hoppress_return (
		$parameter1, 
		$parameter2, 
		$parameter3,
		$parameter4,
		$parameter5,
		$parameter6,
		$parameter7,
		$parameter8,
		$parameter9,
		$parameter10,
		$parameter11,
		$parameter12,
		$parameter13,
		$parameter14		);
	}
}

//This is the heart of the plugin, where you get to write your own php code.  I'm afraid I can't help you with that, as it will be completely unique to your plugin.  Just make sure to return your output, instead of echoing it.  The parameters will be passed directly from the hoppress function, so you don't need to use get_options().
function hoppress_return (
		$parameter1, 
		$parameter2, 
		$parameter3,
		$parameter4,
		$parameter5,
		$parameter6,
		$parameter7,
		$parameter8,
		$parameter9,
		$parameter10,
		$parameter11,
		$parameter12,
		$parameter13,
		$parameter14		)
{
	global $pluginpath;
	$output =			
                    	'<!--begin hopad-->' ."\n"
						.'<div id="hoppress">' ."\n"
						.'<script language="javascript">' ."\n"
                        .'hopfeed_template="";' ."\n"
                        ."hopfeed_align='LEFT';" ."\n"
                        ."hopfeed_type='IFRAME';" ."\n"
                        ."hopfeed_affiliate_tid='" . $parameter3 . "';" ."\n"
                        ."hopfeed_affiliate='" . $parameter1 . "';" ."\n"
                        ."hopfeed_fill_slots='true';" ."\n"
                        .'hopfeed_height=' . $parameter5 . ';' ."\n"
                        .'hopfeed_width=' . $parameter4 . ';' ."\n"
                        .'hopfeed_cellpadding=0;' ."\n"
                        .'hopfeed_rows=' . $parameter12 . ';' ."\n"
                        .'hopfeed_cols=' . $parameter11 . ';' ."\n"
                        ."hopfeed_font='" . $parameter8 . "';" ."\n"
                        ."hopfeed_font_size='" . $parameter10 . "';" ."\n"
                        ."hopfeed_font_color='" . $parameter9 . "';" ."\n"
                        ."hopfeed_border_color='" . $parameter14 . "';" ."\n"
                        ."hopfeed_link_font_color='" . $parameter6 . "';" ."\n"
                        ."hopfeed_link_font_hover_color='" . $parameter7 . "';" ."\n"
                        ."hopfeed_background_color='" . $parameter13 . "';" ."\n"
                        ."hopfeed_keywords='" . $parameter2 . "';" ."\n"
                        ."hopfeed_path='http://" . $parameter1 . ".hopfeed.com';" ."\n"
                        ."hopfeed_link_target='_blank';" ."\n"
                        .'</script>' ."\n"
                        ."<script src='http://" . $parameter1 . ".hopfeed.com/script/hopfeed.js'></script>" ."\n"
						.'</div>' ."\n"
                    	.'<!--end hopad-->' ."\n";
						
	return($output);
}

//This function can be used to insert the function output in a particular post.  In the code view of a Wordpress post, insert a tag like this: <!--hoppress-->, or <!--hoppress(paramater1value)-->.  The plugin will spit out its results at that point in the post content.
function content_hoppress($content)
{
	if(preg_match('/<!--hoppress[\(]*(.*?)[\)]*-->/',$content,$matches))
	{
		$parameter1 = $matches[1];
		$content = preg_replace('/<!--hoppress(.*?)-->/',hoppress(false,$parameter1), $content);
	}
	return $content;
}

//This function creates a backend option panel for the plugin.  It stores the options using the wordpress get_option function.
function hoppress_control()
{
		
		$options = get_option('hoppress');
		
		if ( !is_array($options) )
		{
			//This array sets the default options for the plugin when it is first activated.
			//options are overridden onced saved to the database (in wp-options where option_name = 'hoppress')
			$options = array('title'=>'Affiliates', 
			'parameter1'=>'clickbank-id', 
			'parameter2'=>'computers,hosting,design', 
			'parameter3'=>'trackingid',
			'parameter4'=>'164',
			'parameter5'=>'345',
			'parameter6'=>'#525252',
			'parameter7'=>'#C07D2A',
			'parameter8'=>'Georgia, "Times New Roman", Times, Arial',
			'parameter9'=>'#775931',
			'parameter10'=>'12px',
			'parameter11'=>'1',
			'parameter12'=>'4',
			'parameter13'=>'#EDEDED',
			'parameter14'=>'#EDEDED'			
			);
		}
		if ( $_POST['hoppress-submit'] )
		{
			$options['title'] = strip_tags(stripslashes($_POST['hoppress-title']));

			//One of these lines is needed for each parameter
			$options['parameter1'] = strip_tags(stripslashes($_POST['hoppress-parameter1']));
			$options['parameter2'] = strip_tags(stripslashes($_POST['hoppress-parameter2']));
			$options['parameter3'] = strip_tags(stripslashes($_POST['hoppress-parameter3']));
			$options['parameter4'] = strip_tags(stripslashes($_POST['hoppress-parameter4']));
			$options['parameter5'] = strip_tags(stripslashes($_POST['hoppress-parameter5']));
			$options['parameter6'] = strip_tags(stripslashes($_POST['hoppress-parameter6']));
			$options['parameter7'] = strip_tags(stripslashes($_POST['hoppress-parameter7']));
			$options['parameter8'] = strip_tags(stripslashes($_POST['hoppress-parameter8']));
			$options['parameter9'] = strip_tags(stripslashes($_POST['hoppress-parameter9']));
			$options['parameter10'] = strip_tags(stripslashes($_POST['hoppress-parameter10']));
			$options['parameter11'] = strip_tags(stripslashes($_POST['hoppress-parameter11']));
			$options['parameter12'] = strip_tags(stripslashes($_POST['hoppress-parameter12']));
			$options['parameter13'] = strip_tags(stripslashes($_POST['hoppress-parameter13']));
			$options['parameter14'] = strip_tags(stripslashes($_POST['hoppress-parameter14']));

			update_option('hoppress', $options);
		}
		
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		include $pluginpath . 'hoppress_control.inc.php';

}

//This function adds the options panel under the Options menu of the admin interface.  If you only want the options in the widget panel, you don't need this function, nor the hoppress_optionsMenu one.
function hoppress_addMenu()
{
	add_options_page("HopPress", "HopPress" , 8, __FILE__, 'hoppress_optionsMenu');
}	

//This function is called by hoppress_addMenu, and displays the options panel
function hoppress_optionsMenu()
{
	echo '<div style="width:250px; margin:auto;"><form method="post">';
	hoppress_control();
	echo '<p class="submit"><input value="Submit Changes" type="submit"></form></p></div>';
}

//This function is a wrapper for all the widget specific functions
//You can find out more about widgets here: http://automattic.com/code/widgets/
function widget_hoppress_init()
{
	if (!function_exists('register_sidebar_widget'))
		return;
	
	//This displays the plugin's output as a widget.  You shouldn't need to modify it.
	function widget_hoppress($args)
	{
		extract($args);
				
		$options = get_option('hoppress');
		$title = $options['title'];

		echo $before_widget;
		echo $before_title . $title . $after_title;
		hoppress();
		echo $after_widget;
	}
	
	
	
	register_sidebar_widget('HopPress', 'widget_hoppress');
	//You'll need to modify these two numbers to get the widget control the right size for your options.  
	//250 is a good width, but you'll need to change the 200 depending on how many options you add
	register_widget_control('HopPress', 'hoppress_control', 250, 200);
}
add_action('plugins_loaded', 'widget_hoppress_init');

//future use:
//Comment this out if you do not want the options panel to appear under the Admin Options interface
add_action('admin_menu', 'hoppress_addMenu');

//Uncomment this is you need to include some code in the header
//add_action('wp_head', 'hoppress_header');

//Uncomment this if you want the token to be called using a token in a post (<!--hoppress-->)
//add_filter('the_content', 'content_hoppress');


?>
