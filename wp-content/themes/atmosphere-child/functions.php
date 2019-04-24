<? php
add_filter( 'kadence_portfolio_permalink_slug', 'custom_portfolio_slug');

function custom_portfolio_slug() {
	return 'YOUR_CUSTOM_SLUG_HERE';
}
?>