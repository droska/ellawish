<?php

// Element Class 
class vcServices extends WPBakeryShortCode
{

	// Element Init
	function __construct()
	{
		add_action( 'init', array( $this, 'vc_services_mapping' ) );
		add_shortcode( 'vc_services', array( $this, 'vc_services_html' ) );
	}

	public function vc_services_mapping()
	{

		// Stop all if VC is not enabled
		if (!defined( 'WPB_VC_VERSION' )) {
			return;
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('Ellawish Services', 'text-domain'),
				'base' => 'vc_services',
				'description' => __('Services VC-Ellawish', 'text-domain'),
				'category' => __('Ellawish elements', 'text-domain'),
				'params' => array()
			)
    );
    
	}

	public function vc_services_html($attrs)
	{
		extract(
			shortcode_atts(
				array(),
				$attrs
			)
		);

    $theme_directory = get_stylesheet_directory_uri();
    ?>

<section class="services">

    <div class="grid-container">

        <div class="item item1">
            <div class="overlay"></div>
            <div class="line"></div>
            <h3>Travel & <br> Transport</h3>
        </div>
        <div class="item item2">
            <div class="overlay"></div>
            <h3>global <br> logistic <br> services</h3>
        </div>
        <div class="item item3">
            <div class="overlay"></div>
            <h3>real state <br> buy and rent</h3>
        </div>
        <div class="item item4">
            <div class="overlay"></div>
            <div class="line"></div>
            <h3>entertainment <br> & vip access</h3>
        </div>
        <div class="item item5">
            <div class="overlay"></div>
            <div class="line"></div>
            <h3>personal <br> shopper</h3>
        </div>
        <div class="item item6">
            <div class="overlay"></div>
            <h3>wealth <br> managment</h3>
        </div>
        <div class="item item7">
            <div class="overlay"></div>
            <div class="line"></div>
            <h3>business <br> consulting</h3>
        </div>
        


    </div>

    <!--Animacion servicio 1-->
    <div class="services_item services_1">
        <div class="cuadrado"></div>
    </div>
    <!--Animacion servicio 1-->
    <div class="services_item services_4">
        <div class="cuadrado4"></div>
    </div>
    <!--Animacion servicio 5-->
    <div class="services_item services_5">
        <div class="cuadrado5"></div>
    </div>

</section>


<?php
	}//html
}

new vcServices();

?>
