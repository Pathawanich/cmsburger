<?php
add_filter('woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text');
  
function woo_custom_cart_button_text() {
  return __('Legg til', 'woocommerce');
}



add_filter('gettext', 'change_view_cart_btn');

add_filter('gettext', 'change_checkout_btn');

add_filter( 'gettext', 'translate_product', 20, 3 );

add_filter('gettext', 'translate_price');

add_filter('gettext', 'translate_quick_view');

add_filter('gettext', 'translate_quant');

add_filter( 'gettext', 'change_update_cart_text', 20, 3 );

add_filter( 'gettext', 'change_cart_totals_text', 20, 3 );

add_filter( 'gettext', 'change_separator_text', 20, 3 );

add_filter( 'gettext', 'translate_no_product_Text');

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


function translate_product( $translated, $text, $domain ) {
    if( is_cart() && $translated == 'Product' ){
        $translated = __('Produkt', 'woocommerce');
    }
    return $translated;
}

function translate_no_product_text($translated) { 
  $translated = str_ireplace('No products in the cart.', 'Ingen ingredienser valgt', $translated);
  return $translated; 
}

function translate_price($translated) {
$translated = str_ireplace('Price', 'Pris', $translated);
return $translated;
}

function translate_quick_view($translated) {
$translated = str_ireplace('Quick view', 'Hurtigvisning', $translated);
return $translated;
}

function translate_quant($translated) {
$translated = str_ireplace('Quantity', 'Antall', $translated);
return $translated;
}

function change_update_cart_text( $translated, $text, $domain ) {
    if( is_cart() && $translated == 'Update cart' ){
        $translated = __('Oppdater kurven', 'woocommerce');
    }
    return $translated;
}

function change_cart_totals_text( $translated, $text, $domain ) {
    if( is_cart() && $translated == 'Cart totals' ){
        $translated = __('Totalsum', 'woocommerce');
    }
    return $translated;
}

function change_separator_text( $translated, $text, $domain ) {
    if( is_cart() && $translated == 'or' ){
        $translated = __('eller', 'woocommerce');
    }
    return $translated;
}

//function
function change_checkout_btn($checkout_btn){
  $checkout_btn= str_ireplace('Checkout', 'Til kassen', $checkout_btn);
  return $checkout_btn;
}

function change_view_cart_btn($view_cart_btn){
  $view_cart_btn= str_ireplace('View cart', 'Vis handlekurv', $view_cart_btn);
  return $view_cart_btn;
}

function woocommerce_button_proceed_to_checkout() {
 $checkout_url = wc_get_checkout_url();
 ?>
 <a href="<?php echo $checkout_url; ?>" class="checkout-button button alt wc-forward"><?php _e( 'Gå til kassen', 'woocommerce' ); ?></a>
 <?php
}
?>