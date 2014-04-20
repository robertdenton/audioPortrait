<?php
/**
 * Template Name: People of 4/20 - this one
 * The main template file for display page.
 *
 * @package WordPress
*/

/**
*	Get Current page object
**/
$page = get_page($post->ID);

/**
*	Get current page id
**/
$current_page_id = '';

if(isset($page->ID))
{
    $current_page_id = $page->ID;
}

//$page_sidebar = get_post_meta($current_page_id, 'page_sidebar', true);

get_header("char"); 
?>
<br class="clear"/>
<?php /*
	$is_layerslider_active = is_layerslider_active();

    //Get Page LayerSlider
    $page_layerslider = get_post_meta($current_page_id, 'page_layerslider', true);
    
    if($page_layerslider > 0 && $is_layerslider_active)
    {
    	echo '<div class="page_layerslider slide-down">'.do_shortcode('[layerslider id="'.$page_layerslider.'"]').'</div>';
    }
    
    //If has LayerSlider on this page then hide page header
    if(!$is_layerslider_active OR $page_layerslider <= 0)
    {
*/ ?>
<div id="page_caption" class="fade-in animated3">
	<div class="boxed_wrapper">
		<h2><?php the_title(); ?></h2>
		<div class="sub_page_caption"><?php echo dimox_breadcrumbs(); ?></div>
	</div>
</div>
<?php
	//}
?>

<?php/*
	//Check if use page builder
	$ppb_form_data_order = '';
	$ppb_form_item_arr = array();
	$ppb_enable = get_post_meta($current_page_id, 'ppb_enable', true);
*/?>

<!-- Begin page content -->
<div id="content_wrapper">
    <div class="inner <?php if($page_layerslider <= 0) { ?>fade-in animated4<?php } ?>">
    	<!-- Begin main content -->
    	<div class="inner_wrapper fullwidth <?php if($page_layerslider > 0) { ?>fade-in animated4<?php } ?>" <?php if($page_layerslider > 0 && $is_layerslider_active) { ?>style="z-index:999"<?php } ?>>

            
<!-- END page content -->

<!-- start my content -->

<!--

***

Coded for the CU Independent by Robert R. Denton. See more of his work at robertrdenton.com and see the source code for this project at github.com/robertdenton

***

-->

            <script>
                function scroll(linkID){
                    $('html, body').animate({
                        scrollTop: $(linkID).offset().top - 125
                    }, 1000);
                }
                function playAudio(audioID,buttonID){
                    var clip = $("#" + audioID);
                    var button = $("#" + buttonID);
                    var playButton = "../new/wp-content/themes/extremis-child/media/play.png";
                    var pauseButton = "../new/wp-content/themes/extremis-child/media/pause.png";
                    if (clip.prop('paused')){
                        clip[0].play();
                        button.prop('src', pauseButton);
                    }
                    else{
                        clip.get(0).pause();
                        button.prop('src', playButton);
                    }
                }
            </script>
            <div id="wrapIt">
                <img src="../new/wp-content/themes/extremis-child/media/pause.png" style="display:none">
                <div id="thumbs" style="margin-top:7px"><!-- >>>10<<< is magic number -->
                    <!--
                    <img src="../new/wp-content/themes/extremis-child/media/photo/001.jpg" class="thumbIMG" onclick="scroll('#char2')">
                    -->
                    <img src="../new/wp-content/themes/extremis-child/media/photo/001.jpg" class="thumbIMG" onclick="scroll('#char1')">
                </div><!-- #thumbs -->

                <!-- page content php -->

                            <?php 
                                if ( empty($ppb_enable) && have_posts() ) {
                                while ( have_posts() ) : the_post(); ?>     
                        
                                <?php the_content(); break;  ?>

                            <?php endwhile; 
                                }
                                else //Display Page Builder Content
                                {
                                    pp_apply_builder($current_page_id);
                                }
                            ?>
                <!-- page content php -->


                <div id="main">
                	<!-- 2 -->
                    <!--
                    <div class="characterBox" id="char2">
                        <div class="media right">
                            <img src="../new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio2">
                              <source src="../new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="../new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>  
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="../new/wp-content/themes/extremis-child/media/play.png" id="play2" class="play" onclick="playAudio('audio2','play2');">
                        </div>
                    </div>
                    -->
                    <!-- 1 -->
                    <div class="characterBox" id="char1">
                        <div class="media left">
                            <img src="../new/wp-content/themes/extremis-child/media/photo/001.jpg" class="bigIMG">
                            <audio id="audio1">
                              <source src="../new/wp-content/themes/extremis-child/media/audio/001.ogg" type="audio/ogg" />
                              <source src="../new/wp-content/themes/extremis-child/media/audio/001.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio> 
                        </div>
                        <div class="description right">
                            <p class="name"><b>Tyler Williams</b> - 4:31 a.m.</p>
                            <p class="meta"> Senior, psychology</p>
                            <p>Senior psychology major Tyler Williams sports a tie early in the morning near Duane Lawn, the site of the 2012 4/20 smoke-out. Williams said he was strolling around campus seeing if there was anything going on, but had only run into other students doing the same.</p>
                            <p class="plea">Click play below to hear his story.</p>
                            <img src="../new/wp-content/themes/extremis-child/media/play.png" id="play1" class="play" onclick="playAudio('audio1','play1');">
                        </div>
                    </div>
                </div><!-- #main -->
            </div><!-- #wrapper -->

<!-- END my content -->

    		<br class="clear"/>

    	</div>
    	<!-- End main content -->
    </div> 
</div>
<!-- End content -->
<?php get_footer(); ?>