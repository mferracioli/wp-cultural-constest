<?php
class ContestContests_UserController {
	
	function showAction() {
		$userModel = new ContestContests_UserModel();
		$contestModel = new ContestContests_ContestModel();
		$id = $_GET["id"];
		$user = $userModel->find($id);
		$contest = $contestModel->find($user->contest_id);
		require(dirname(__FILE__) . "/../views/user/show.php");
	}
	
	function indexAction() {
		$userModel = new ContestContests_UserModel();
		$items = $userModel->findAll();
		require(dirname(__FILE__) . "/../views/user/index.php");
	}
	
}
?>