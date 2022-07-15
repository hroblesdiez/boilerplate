<?php
/**
 * GeneratePress child theme.
 *
 * You can modify it to adapt to your project
 *
 * @package Boilerplate
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Include other functions as needed from the `inc` folder.
 */

   require_once dirname(__FILE__) . '/inc/custom-fields.php'; //The custom fields to show in the custom post types, posts and pages. Require Carbon Fields.Must be before the others inc
   require_once dirname(__FILE__) . '/inc/breadcrumbs.php'; //Breadcrumbs to show. Modificate as needed
   require_once dirname(__FILE__) . '/inc/login.php'; //Show the logo of your client
   require_once dirname(__FILE__) . '/inc/enqueue-assets.php';
   require_once dirname(__FILE__) . '/inc/enqueue_editor_assets.php';
   require_once dirname(__FILE__) . '/inc/general-settings.php';
   require_once dirname(__FILE__) . '/inc/header-settings.php';
   require_once dirname(__FILE__) . '/inc/footer-settings.php';
   require_once dirname(__FILE__) . '/inc/home-settings.php';//Settings for the blog page
   require_once dirname(__FILE__) . '/inc/defaults.php'; // Default colors. The will appear in the Customizer
   require_once dirname(__FILE__) . '/inc/dashboard-widgets.php'; //Show the client useful info like videos or cheatsheets
   require_once dirname(__FILE__) . '/inc/users.php'; //Configures the dashboard for clients
   require_once dirname(__FILE__) . '/inc/widgets.php'; //Show or hide widgets to the customer
   require_once dirname(__FILE__) . '/inc/images.php'; // Set images sizes
   require_once dirname(__FILE__) . '/inc/optimization.php';
   require_once dirname(__FILE__) . '/inc/gutenberg-blocks.php';
   require_once dirname(__FILE__) . '/inc/shortcodes.php'; //Shortcodes to include in pages to show the Team, Departments, Banner slides or whatever. To use with no-tech clients
   require_once dirname(__FILE__) . '/inc/content.php'; //The content in archive blog and single posts












