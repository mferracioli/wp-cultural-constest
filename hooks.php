<?php
function culturalContestInstall() {
	
	var_dump("install");
	
	$culturalContestInstall = new CulturalContest_Install();
	$culturalContestInstall->install();
}

register_activation_hook(dirname(__FILE__) . "/boot.php", "culturalContestInstall");

function culturalContestMenu() {
	add_menu_page("Concursos", "Concursos", "manage_options", "cultural-contest", "culturalContestContests");
	add_submenu_page("cultural-contest", "Usuários", "Usuários", "manage_options", "cultural-contest-users", "culturalContestUsers");
}

add_action("admin_menu", "culturalContestMenu");

function culturalContestContests() {
	$contestController = new ContestContests_Controller_Contest();
	
	if ($_GET["action"] == "new") {
		$contestController->newAction();
	} else if ($_GET["action"] == "create") {
		$contestController->createAction();
	} else if ($_GET["action"] == "edit") {
		$contestController->editAction();
	} else if ($_GET["action"] == "update") {
		$contestController->updateAction();
	} else if ($_GET["action"] == "users") {
		$contestController->usersAction();
	} else if ($_GET["action"] == "delete") {
		$contestController->deleteAction();
	} else {
		$contestController->indexAction();
	}
}

function culturalContestUsers() {
	$userController = new ContestContests_Controller_User();
	
	if ($_GET["action"] == "show") {
		$userController->showAction();
	} else {
		$userController->indexAction();
	}
}

function culturalContestEnableEditor() {
	wp_enqueue_script( "common" );
	wp_enqueue_script( "jquery-color" );
	wp_print_scripts("editor");
	if (function_exists("add_thickbox")) add_thickbox();
	wp_print_scripts("media-upload");
	if (function_exists("wp_tiny_mce")) wp_tiny_mce();
	wp_admin_css();
	wp_enqueue_script("utils");
	do_action("admin_print_styles-post-php");
	do_action("admin_print_styles");
}

add_filter("admin_head","culturalContestEnableEditor");

function culturalContestForm($atts) {
	$userController = new ContestContests_Controller_User();
	$id = $atts["id"];
	
	if ($_POST["action"] == "create") {
		$userController->createAction();
	} else {
		$userController->newAction($id);
	}
}

add_shortcode("cultural_contest_form", "culturalContestForm");

function culturalContestStylesheet() {
	$path = WP_PLUGIN_URL . "/" . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)) . "stylesheets/style.css";
	wp_register_style("cultural_contest_stylesheet", $path);
	wp_enqueue_style( "cultural_contest_stylesheet");
}

add_filter("wp_print_styles","culturalContestStylesheet");

function culturalContestJavascript() {
	$path = WP_PLUGIN_URL . "/" . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)) . "javascripts/jquery.validate.min.js";
	$path2 = WP_PLUGIN_URL . "/" . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)) . "javascripts/jquery.maskedinput.min.js";
	$path3 = WP_PLUGIN_URL . "/" . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)) . "javascripts/application.js";
	
	wp_register_script("jquery_validate", $path);
	wp_register_script("jquery_maskedinput", $path2);
	wp_register_script("cultural_contest_application", $path3);
	
	wp_enqueue_script("jquery");
	wp_enqueue_script("jquery_validate");
	wp_enqueue_script("jquery_maskedinput");
	wp_enqueue_script("cultural_contest_application");
}

add_filter("wp_enqueue_scripts","culturalContestJavascript");
?>