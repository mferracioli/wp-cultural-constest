<?php
/*
Plugin Name: Concurso Cultural
Plugin URI: 
Description: Sistema para criação de concursos culturais
Author: Marcelo Ferracioli
Version: 0.1.0
Author URI: http://www.twitter.com/mferracioli
*/

include(dirname(__FILE__) . "/install.php");
include(dirname(__FILE__) . "/models/contest.php");
include(dirname(__FILE__) . "/models/user.php");
include(dirname(__FILE__) . "/controllers/contest.php");
include(dirname(__FILE__) . "/controllers/user.php");


function culturalContestInstall() {
	$culturalContestInstall = new CulturalContest_Install();
	$culturalContestInstall->install();
}

register_activation_hook(__FILE__, "culturalContestInstall");

function culturalContestMenu() {
	add_menu_page("Concursos", "Concursos", "manage_options", "cultural-contest", "culturalContestContests");
	add_submenu_page("cultural-contest", "Usuários", "Usuários", "manage_options", "cultural-contest-users", "culturalContestUsers");
}

function culturalContestContests() {
	$contestController = new ContestContests_ContestController();
	
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
	$userController = new ContestContests_UserController();
	
	if ($_GET["action"] == "show") {
		$userController->showAction();
	} else {
		$userController->indexAction();
	}
}

add_action("admin_menu", "culturalContestMenu");

function culturalContestEnableEditor() {
	wp_enqueue_script( 'common' );
	wp_enqueue_script( 'jquery-color' );
	wp_print_scripts('editor');
	if (function_exists('add_thickbox')) add_thickbox();
	wp_print_scripts('media-upload');
	if (function_exists('wp_tiny_mce')) wp_tiny_mce();
	wp_admin_css();
	wp_enqueue_script('utils');
	do_action("admin_print_styles-post-php");
	do_action('admin_print_styles');
}

add_filter('admin_head','culturalContestEnableEditor');

?>