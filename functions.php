<?php
function culturalContestInstall() {
	$culturalContestInstall = new CulturalContest_Install();
	$culturalContestInstall->install();
}

function culturalContestMenu() {
	add_menu_page("Concursos", "Concursos", "manage_options", "cultural-contest", "culturalContestContests");
	add_submenu_page("cultural-contest", "Usuários", "Usuários", "manage_options", "cultural-contest-users", "culturalContestUsers");
}

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

function culturalContestForm($atts) {
	$id = $atts["id"];
	$contestController = new ContestContests_Controller_Contest();
	$contestController->showAction($id);
}

function culturalContestStylesheet() {
	$path = WP_PLUGIN_URL . "/" . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)) . "style.css";
	wp_register_style("cultural_contest_stylesheet", $path);
	wp_enqueue_style( "cultural_contest_stylesheet");
}
?>