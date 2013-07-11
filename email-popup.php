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
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel='stylesheet' id='wp-email-css'  href='<?php bloginfo('stylesheet_directory'); ?>/email-css.css?ver=2.60' type='text/css' media='all' />
	<script type='text/javascript' src='<?php bloginfo('wpurl'); ?>/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
	<?php// wp_head(); ?>
</head>
<body class="wp-email">
	<div id="wp-email-popup">
		<?php email_form(true); ?>
		<?php //wp_footer(); ?>
	</div>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var emailL10n = {"ajax_url":"http:\/\/raamdev.dev\/wordpress\/wp-admin\/admin-ajax.php","max_allowed":"5","text_error":"The Following Error Occurs:","text_name_invalid":"- Your Name is empty\/invalid","text_email_invalid":"- Your Email is empty\/invalid","text_remarks_invalid":"- Your Remarks is invalid","text_friend_names_empty":"- Friend Name(s) is empty","text_friend_name_invalid":"- Friend Name is empty\/invalid: ","text_max_friend_names_allowed":"- Maximum 5 Friend Names allowed","text_friend_emails_empty":"- Friend Email(s) is empty","text_friend_email_invalid":"- Friend Email is invalid: ","text_max_friend_emails_allowed":"- Maximum 5 Friend Emails allowed","text_friends_tally":"- Friend Name(s) count does not tally with Friend Email(s) count","text_image_verify_empty":"- Image Verification is empty"};
	/* ]]> */
	</script>
	<script type='text/javascript' src='<?php bloginfo('wpurl'); ?>/wp-content/plugins/wp-email/email-js.js?ver=2.60'></script>
</body>
</html>
