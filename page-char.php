<?php
/**
 * Template Name: People of 4/20 template page
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

            <script>
                function scroll(linkID){
                    $('html, body').animate({
                        scrollTop: $(linkID).offset().top - 125
                    }, 1000);
                }
                function playAudio(audioID,buttonID){
                    var clip = $("#" + audioID);
                    var button = $("#" + buttonID);
                    var playButton = "new/wp-content/themes/extremis-child/media/play.png";
                    var pauseButton = "new/wp-content/themes/extremis-child/media/pause.png";
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
                <img src="new/wp-content/themes/extremis-child/media/pause.png" style="display:none">
                <div id="thumbs" style="margin-top:7px"><!-- >>>10<<< is magic number -->
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char1')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char2')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char3')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char4')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char5')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char6')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char7')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char8')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/kyle/kyleS.jpg" class="thumbIMG" onclick="scroll('#char9')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char10')">
                    <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyS.jpg" class="thumbIMG" onclick="scroll('#char11')">
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
                    <!-- 1 -->
                    <div class="characterBox" id="char1">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio1">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio> 
                        </div>
                        <div class="description right">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play1" class="play" onclick="playAudio('audio1','play1');">
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="characterBox" id="char2">
                        <div class="media right">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio2">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>  
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play2" class="play" onclick="playAudio('audio2','play2');">
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="characterBox" id="char3">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio3">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description right">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play3" class="play" onclick="playAudio('audio3','play3');">
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="characterBox" id="char4">
                        <div class="media right">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio4">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play4" class="play" onclick="playAudio('audio4','play4');">
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="characterBox" id="char5">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio5">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description right">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play5" class="play" onclick="playAudio('audio5','play5');">
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="characterBox" id="char6">
                        <div class="media right">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio6">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play6" class="play" onclick="playAudio('audio6','play6');">
                        </div>
                    </div>
                    <!-- 7 -->
                    <div class="characterBox" id="char7">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio7">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description right">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play7" class="play" onclick="playAudio('audio7','play7');">
                        </div>
                    </div>
                    <!-- 8 -->
                    <div class="characterBox" id="char8">
                        <div class="media right">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio8">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play8" class="play" onclick="playAudio('audio8','play8');">
                        </div>
                    </div>
                    <!-- 9 -->
                    <div class="characterBox" id="char9">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/kyle/kyleL.jpg" class="bigIMG">
                            <audio id="audio9">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description right">
                            <p class="name">Kyle Plantico</p>
                            <p class="meta"> 22, senior, environmental design</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play9" class="play" onclick="playAudio('audio9','play9');">
                        </div>
                    </div>
                    <!-- 10 -->
                    <div class="characterBox" id="char10">
                        <div class="media right">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio10">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description left">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play10" class="play" onclick="playAudio('audio10','play10');">
                        </div>
                    </div>
                    <!-- 11 -->
                    <div class="characterBox" id="char11">
                        <div class="media left">
                            <img src="new/wp-content/themes/extremis-child/media/photo/audrey/audreyL.jpg" class="bigIMG">
                            <audio id="audio11">
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.ogg" type="audio/ogg" />
                              <source src="new/wp-content/themes/extremis-child/media/audio/kyle/kyle.mp3" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="description right">
                            <p class="name">Audrey Lavender</p>
                            <p class="meta"> 22, senior, integrated physiology</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="plea">Click play below to hear her story.</p>
                            <img src="new/wp-content/themes/extremis-child/media/play.png" id="play11" class="play" onclick="playAudio('audio11','play11');">
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