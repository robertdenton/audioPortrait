<?php
/**
 * The Header for the template.
 *
 * @package WordPress
 */

if(session_id() == '') 
{
	session_start();
}

if ( ! isset( $content_width ) ) $content_width = 960;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<title><?php wp_title('&lsaquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<!-- my stuff -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<style>
body,html{
	font-family: Arial, "sans serif";
	text-align: center;
	margin:1px;
}
audio{
	width:100%;
	margin-top:-5px;
	border-radius: 0px;
	background-color:black;
}
a{
	text-decoration: none;
}
#wrapper{
	width:100%;
	max-width: 1200px;
	margin:auto;
	text-align: left;
}
#cuiHeader{
	text-align: left;
}
#cuiHeader img{
	width:100%;
	max-width: 700px;
}
#title{
	font-family: Helvetica;
	font-size: 300%;
	font-weight: 100;
	background-color: black;
	color:white;
	padding-top: 50px;
	padding-bottom: 50px;
}
#thumbs{
	margin-top:7px;
	text-align: center;
	margin:0;
}
.thumbIMG{
	width:75px;
	height:75px;
}
#intro{
	width:60%;
	padding:2%;
	margin: auto;
	margin-top:7px;
	border:1px solid black;
}
#intro p{
	margin-top:0;
	text-align:left;
}
.characterBox{
	width:100%;
	margin:auto;
	margin-top:50px;
	overflow: hidden;
}
.left{
	float:left;
	text-align: right;
}
.right{
	float: right;
}
.media{
	width:45%;
}
.bigIMG{
	width:100%;
}
.description{
	width:40%;
	margin-top:7px;
}
.description p{
	vertical-align: middle;
}
.name{
	font-weight: 900;
	font-size: 150%;
}
.meta{
	font-size: 120%;
}
.plea{
	font-weight:600;
	font-size: 95%;
}

@media screen and (max-width:799px){
	.characterBox{
		width:90%;
	}
	#intro{
		width:95%;
	}
	.media{
		width:100%;
	}
	.left{
		text-align: left;
	}
	.description{
		width:100%;
	}
}
</style>
<!-- end my stuff -->



<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/**
	*	Get favicon URL
	**/
	$pp_favicon = get_option('pp_favicon');
	
	if(!empty($pp_favicon))
	{
?>
		<link rel="shortcut icon" href="<?php echo $pp_favicon; ?>" />
<?php
	}
?>

<!-- Bit that puts in top header widget - Rob Denton 11/1/13 -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : ?> <?php endif; ?> 

<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?> 
</head>

<body <?php body_class(); ?>>

	<!-- <div style="width:100%;text-align:center">
		<?php if (function_exists(display_campaign)) {display_campaign(1);} //Ad in header
		?>
	</div> -->


	<?php
		$pp_blog_ajax_search = get_option('pp_blog_ajax_search');
	?>
	<input type="hidden" id="pp_blog_ajax_search" name="pp_blog_ajax_search" value="<?php echo $pp_blog_ajax_search; ?>"/>
	<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="<?php echo home_url(); ?>"/>

	<!-- Begin mobile menu -->
	<div class="mobile_menu_wrapper">
	    <?php 	
	    	if ( has_nav_menu( 'main-menu' ) ) 
	    	{
	    		//Get page nav
	    		wp_nav_menu( 
	    		    	array( 
	    		    		'menu_id'			=> 'mobile_main_menu',
	    		    		'menu_class'		=> 'mobile_main_nav',
	    		    		'theme_location' 	=> 'main-menu',
	    		    	) 
	    		); 
	    	}
	    	
	    	if ( has_nav_menu( 'second-menu' ) ) 
	    	{
	    	    //Get page nav
	    	    wp_nav_menu( 
	    	        	array( 
	    	        		'menu_id'			=> 'mobile_second_menu',
	    	        		'menu_class'		=> 'mobile_main_nav',
	    	        		'theme_location' 	=> 'second-menu',
	    	        	) 
	    	    ); 
	    	}
	    ?>
	</div>
	<!-- End mobile menu -->
	
	<!-- Begin template wrapper -->
	<div id="wrapper">
		<!-- Begin header -->
		<div id="header_wrapper">
			<div class="standard_wrapper">
				<div id="mobile_nav_icon"></div>
				<?php 	
				if ( has_nav_menu( 'main-menu' ) ) 
				{
					//Get page nav
					wp_nav_menu( 
					    	array( 
					    		'menu_id'			=> 'main_menu',
					    		'menu_class'		=> 'main_nav',
					    		'theme_location' 	=> 'main-menu',
					    	) 
					); 
				}
				else
				   {
				    		echo '<div class="mainmenu notice">Please setup "Main Menu" using Wordpress Dashboard > Appearance > Menus</div>';
				   }
				?>
				<div id="menu_border_wrapper"></div>
				<form role="search" method="get" name="searchform" id="searchform" action="<?php echo home_url(); ?>/">
					<div>
						<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" autocomplete="off" title="<?php _e( 'Search...', THEMEDOMAIN ); ?>"/>
						<button type="submit">
					    	<img src="<?php echo get_template_directory_uri(); ?>/images/search_form_icon.png" alt=""/>
					    </button>
					</div>
				    <div id="autocomplete"></div>
				</form>
				<div class="social_wrapper">
				    <ul>
				    	<?php
				    		$pp_facebook_username = get_option('pp_facebook_username');
				    		
				    		if(!empty($pp_facebook_username))
				    		{
				    	?>
				    	<li><a target="_blank" href="http://facebook.com/<?php echo $pp_facebook_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/facebook.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_twitter_username = get_option('pp_twitter_username');
				    		
				    		if(!empty($pp_twitter_username))
				    		{
				    	?>
				    	<li><a target="_blank" href="http://twitter.com/<?php echo $pp_twitter_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/twitter.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_flickr_username = get_option('pp_flickr_username');
				    		
				    		if(!empty($pp_flickr_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Flickr" href="http://flickr.com/people/<?php echo $pp_flickr_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/flickr.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_youtube_username = get_option('pp_youtube_username');
				    		
				    		if(!empty($pp_youtube_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Youtube" href="http://youtube.com/user/<?php echo $pp_youtube_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/youtube.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_vimeo_username = get_option('pp_vimeo_username');
				    		
				    		if(!empty($pp_vimeo_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Vimeo" href="http://vimeo.com/<?php echo $pp_vimeo_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/vimeo.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_tumblr_username = get_option('pp_tumblr_username');
				    		
				    		if(!empty($pp_tumblr_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Tumblr" href="http://<?php echo $pp_tumblr_username; ?>.tumblr.com"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/tumblr.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_google_username = get_option('pp_google_username');
				    		
				    		if(!empty($pp_google_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Google+" href="<?php echo $pp_google_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/google.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_dribbble_username = get_option('pp_dribbble_username');
				    		
				    		if(!empty($pp_dribbble_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Dribbble" href="http://dribbble.com/<?php echo $pp_dribbble_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/dribbble.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				    		$pp_linkedin_username = get_option('pp_linkedin_username');
				    		
				    		if(!empty($pp_linkedin_username))
				    		{
				    	?>
				    	<li><a target="_blank" title="Linkedin" href="<?php echo $pp_linkedin_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/linkedin.png" alt=""/></a></li>
				    	<?php
				    		}
				    	?>
				    	<?php
				            $pp_pinterest_username = get_option('pp_pinterest_username');
				            
				            if(!empty($pp_pinterest_username))
				            {
				        ?>
				        <li><a target="_blank" title="Pinterest" href="http://pinterest.com/<?php echo $pp_pinterest_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/pinterest.png" alt=""/></a></li>
				        <?php
				            }
				        ?>
				        <?php
			            	$pp_instagram_username = get_option('pp_instagram_username');
			            	
			            	if(!empty($pp_instagram_username))
			            	{
			            ?>
			            <li><a target="_blank" title="Instagram" href="http://instagram.com/<?php echo $pp_instagram_username; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_black/instagram.png" alt=""/></a></li>
			            <?php
			            	}
			            ?>
				    </ul>
				</div>
			</div>
		</div>
		<!-- End header -->
					
		<br class="clear"/>
		<div id="boxed_wrapper">
			<div class="logo fade-in animated1">
				<!-- Begin logo -->	
				<?php
					//get custom logo
					$pp_logo = get_option('pp_logo');
					$pp_retina_logo = get_option('pp_retina_logo');
								
					if(empty($pp_logo) && empty($pp_retina_logo))
					{
						$pp_retina_logo = get_template_directory_uri().'/images/logo@2x.png';
					}
					
					if(!empty($pp_retina_logo))
					{
						//Get image width and height
						list($logo_width, $logo_height, $logo_type, $logo_attr) = getimagesize($pp_retina_logo);
						
						$logo_retina_width = $logo_width/2;
						$logo_retina_height = $logo_height/2;
				?>		
					<a id="custom_logo" class="logo_wrapper" href="<?php echo home_url(); ?>">
						<img src="<?php echo $pp_retina_logo?>" alt="" width="<?php echo $logo_retina_width; ?>" height="<?php echo $logo_retina_height; ?>"/>
					</a>
				<?php
					}
					else //if not retina logo
					{
				?>
					<a id="custom_logo" class="logo_wrapper" href="<?php echo home_url(); ?>">
						<img src="<?php echo $pp_logo?>" alt=""/>
					</a>
				<?php
					}
				?>
				<!-- End logo -->
			</div>
			<div class="header_ads fade-in animated1">
				<?php
				    $pp_top_banner = get_option('pp_top_banner');
	
				    if(!empty($pp_top_banner))
				    {
				    	echo stripslashes($pp_top_banner);
				    }
				?>
			</div>
			<br class="clear"/>
			<?php 	
			if ( has_nav_menu( 'second-menu' ) ) 
			{
			    //Get page nav
			    wp_nav_menu( 
			        	array( 
			        		'menu_id'			=> 'second_menu',
			        		'menu_class'		=> 'second_nav fade-in animated2',
			        		'theme_location' 	=> 'second-menu',
			        	) 
			    ); 
			}
			else
			   {
			    		echo '<div class="secondmenu notice">Please setup "Secondary Menu" using Wordpress Dashboard > Appearance > Menus</div>';
			   }
			?>
	
		</div>