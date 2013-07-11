<?php
/**
 * WordPress Plugin: WP-EMail
 * Copyright (c) 2012 Lester "GaMerZ" Chan
 *
 * File Written By:
 * - Lester "GaMerZ" Chan
 * - http://lesterchan.net
 *
 * File Information:
 * - E-Mail Post/Page To A Friend (Popup Window)
 * - wp-content/plugins/wp-email/email-popup.php
 */


### Session Start
@session_start();

### Filters
add_filter('wp_title', 'email_pagetitle');
add_filter('the_title', 'email_title');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="robots" content="noindex, nofollow" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; <?php _e('Blog Archive', 'wp-email'); ?> <?php } ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body class="wp-email">
	<div id="wp-email-popup">
		<?php email_form(true); ?>
		<?php wp_footer(); ?>
	</div>
</body>
</html>
