<?php
class ContestContests_Controller_User {
	
	function showAction() {
		$userModel = new ContestContests_Model_User();
		$contestModel = new ContestContests_Model_Contest();
		$id = $_GET["id"];
		$user = $userModel->find($id);
		$contest = $contestModel->find($user->contest_id);
		require(dirname(__FILE__) . "/../views/user/show.php");
	}
	
	function indexAction() {
		$userModel = new ContestContests_Model_User();
		$items = $userModel->findAll();
		require(dirname(__FILE__) . "/../views/user/index.php");
	}
	
	function newAction($id) {
		$userModel = new ContestContests_Model_User();
		$contestModel = new ContestContests_Model_Contest();
		$contest = $contestModel->find($id);
		require(dirname(__FILE__) . "/../views/user/new.php");
	}
	
	function createAction() {
		$userModel = new ContestContests_Model_User();
		$contestModel = new ContestContests_Model_Contest();
		$userModel->create($_POST);
		$contest_id = $_POST["contest_id"];
		$contest = $contestModel->find($contest_id);
		require(dirname(__FILE__) . "/../views/user/create.php");
	}
	
}
?>