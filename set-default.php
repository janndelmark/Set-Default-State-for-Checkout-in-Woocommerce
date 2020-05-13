<?php 

// default checkout state
add_filter( 'default_checkout_billing_state', 'change_default_checkout_state' );
add_filter( 'default_checkout_shipping_state', 'change_default_checkout_state' );
function change_default_checkout_state() {
    return '00'; // state code
}

// Setting one state only
add_filter( 'woocommerce_states', 'custom_woocommerce_state', 10, 1 );
function custom_woocommerce_state( $states ) {
    // Returning a unique state
    return array('PH' => array('00' => 'Metro Manila'));
}

?>
