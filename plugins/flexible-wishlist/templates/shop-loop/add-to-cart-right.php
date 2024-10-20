<?php
/**
 * @var \WC_Product $product           .
 * @var bool        $status            .
 * @var string      $icon_type         .
 * @var string      $text_status_add   .
 * @var string      $text_status_added .
 *
 * @package WPDesk\FlexibleWishlist
 */

?>
<span data-fw-action="add-to-wishlist"
	tabindex="0"
	aria-label="<?php esc_attr_e('Add to wishlist', 'flexible-wishlist') ?>"
	class="fw-button fw-button--after <?php echo esc_attr( ( $status ) ? 'fw-button--active' : '' ); ?>"
	data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
	<span class="fw-button-icon fw-button-icon--<?php echo esc_attr( $icon_type ); ?>"></span>
</span>
