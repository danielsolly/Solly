<?php
function sdi_enqueue_styles() {
    wp_enqueue_style('sdi-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sdi_enqueue_styles');

// Add HubSpot tracking code
function add_hubspot_tracking() { ?>
    <!-- HubSpot Tracking Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/243622082.js"></script>
<?php }
add_action('wp_footer', 'add_hubspot_tracking');
?>
