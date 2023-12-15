<?php

/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined('ABSPATH') || exit;
?>



<?php do_action('woocommerce_before_checkout_billing_form', $checkout);

$fields = $checkout->get_checkout_fields('billing');

$fields_facturacion = [
	"billing_first_name",
	"billing_last_name",
	"billing_phone",
	"billing_email",
];
$fields_envio = [
	"billing_country",
	"billing_address_1",
	"billing_address_2",
	"billing_city",
	"billing_state",
	"billing_postcode",
];

?>

<li class="informacion-facturacion">
	<i class="fa-regular fa-file-lines"></i>
	<h3><?php esc_html_e('Billing', 'woocommerce'); ?></h3>
	<div class="fields">
		<?php
		foreach ($fields as $key => $field) {
			if (in_array($key, $fields_facturacion)) {
				woocommerce_form_field($key, $field, $checkout->get_value($key));
			}
		}
		?>
	</div>

</li>
<li class="informacion-envio">
<i class="fa-solid fa-truck"></i>
	<h3><?php esc_html_e('Shipping', 'woocommerce'); ?></h3>
	<?php
	foreach ($fields as $key => $field) {
		if (in_array($key, $fields_envio)) {
			woocommerce_form_field($key, $field, $checkout->get_value($key));
		}
	}
	?>
	<div class="woocommerce-additional-fields__field-wrapper">
		<?php foreach ($checkout->get_checkout_fields('order') as $key => $field) : ?>
			<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
		<?php endforeach; ?>
	</div>
</li>


<?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>