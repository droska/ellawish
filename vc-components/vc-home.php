<?php

class ellaHome extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'ella_home_mapping' ) );
        add_shortcode( 'ella_home', array( $this, 'ella_home_html' ) );
    }

    // Element Mapping
    public function ella_home_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }                              
        vc_map(array(
            'name' => esc_html__('Ellawish Home', ''),
            'base' => 'ella_home',
            'category' => esc_html__('Ellawish elements', ''),
        ));
    }

    // Element HTML
    public function ella_home_html( $atts ) {
    $domain = "ellawish";
    $url = get_template_directory_uri();
?>

<script type="text/javascript">

function hideVid(){
    jQuery(function ($) {
        //console.log("hide");
        $('#video-intro').fadeOut(1000);
    });
}
 
</script>

<div class="home-wrapper">
   <!-- <video id="video-intro" onended="hideVid()" width="100%" autoplay controls defaultMuted> -->
     <!--   <source src="<?= $url ?>/video/intro.mp4" type="video/mp4" /> -->
        <!--<source src="video.ogv" type="video/ogg" /> -->
   <!-- </video> -->
   <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-3">
            
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>


<?php

    }

} // End Element Class

new ellahome(); 
?>
