<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plums
 */

?>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Please Level Up My Skills</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<span class="span-logo"><a class="logo" href="https://plums.lachlanpodger.com/">PLUMS</a></span>
	<div id="pencet">
		<span></span>
		<span></span>
		<span></span>
	</div>
<?php
wp_nav_menu ( array(

'display_location' => 'Primary',
'container'=> 'nav',

'container_class'  => 'main-menu nav-bar-links',

'menu_class' => ''

));
?>

</header>