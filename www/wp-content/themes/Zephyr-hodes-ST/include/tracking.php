<?php

// check cookie form acceptance post
add_action('init',function(){

	if(isset($_GET['accept_cookies'])) {
       // $lang = pll_current_language();

        if($_GET['accept_cookies']==1){
    		setcookie('acceptcookies', 1, (time()+(3600)*2), "/");

    		
        }
        if($_GET['accept_cookies']==0){
            setcookie('acceptcookies', 0, (time()+(3600)*2), "/");
           
        }
     
        $url =  get_site_url().$_SERVER['REDIRECT_URL'];
        wp_redirect($url);
        exit;
        
    }
});

add_filter('body_class', 'polylang_class');

function polylang_class($classes) {
        if ($_SERVER['HTTP_CF_IPCOUNTRY']) {
            $location = $_SERVER['HTTP_CF_IPCOUNTRY'];
        }
        $lang = pll_current_language();
        if($lang=='de' || $location=='DE'){
            array_push($classes,'de');
        }else{
            array_push($classes,'en');
        }
        return $classes;
}

add_action('after_body', function()
{

   // if (showcookiemessage()) {
    ?>

    <div class='cookies_overlay'>
        
            <div class="l-main-h i-cf">

                
                           

                            <p><?php

                                echo __('We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.', 'fdm');
                                ?>
                              <span class="cookie_inputs">
                             
                                <a href="?accept_cookies=1" class="btn_cookie" id="confirmcookies"><?php echo __('OK','fdm');?></a>
                                <a href="?accept_cookies=0" class="btn_cookie" id="denycookies"><?php echo __('No Thanks','fdm');?></a>
                            </span>
                            </p>
                           

                      
            </div>
        
    </div>
    <?php
   // }
});


function showcookiemessage(){

   
    if (isset($_COOKIE["acceptcookies"])) {
        return false;
    }  else{
        return true;
    }
    
    
}

function checkallowedcookie(){

    if ($_SERVER['HTTP_CF_IPCOUNTRY']) {
        $location = $_SERVER['HTTP_CF_IPCOUNTRY'];
    }
    $lang = pll_current_language();

    if (isset($_COOKIE["acceptcookies"]) && $_COOKIE["acceptcookies"]==1 ) {
        return true;
    }
    if (isset($_COOKIE["acceptcookies"]) && $_COOKIE["acceptcookies"]==0 ) {
        return false;
    }
    if($lang=='de' || $location=='DE'){
        return false;
    }else{
        return true;
    }
    
    
}



add_action( 'wp_head', function() {
// pixel and adwords tracking
// check cookies are not blocked by user

    ?>
<!-- Global site tag (gtag.js) - AdWords: 1070642605 -->
<script async src="https//www.googletagmanager.com/gtag/js?id=AW-1070642605"></script>

<!-- End Facebook Pixel Code -->
<?php

} );


/**  facebook tracking pixel ***/

add_action('wp_footer', function() {

    // if acf set for tracking pixel and cookies are not optout by user, trigger tracking event
    if( get_field('include_facebook_tracking_pixel') ){
     ?>
     <script> 
    jQuery(function($){
        $( document ).ready(function() {
            if ((typeof $.cookie('acceptcookies') === 'undefined' && !$("body").hasClass("de")) || $.cookie('acceptcookies') == '1'){
             fbq('track', 'ViewContent');
             }
        });
    });
    </script>
     <?php
    }

},200);



add_action( 'us_before_canvas', function() {

     if (checkallowedcookie()) {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR4946Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
} );




