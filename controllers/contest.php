<?php
class ContestContests_Controller_Contest {
	
	function indexAction() {
		$contestModel = new ContestContests_Model_Contest();
		$items = $contestModel->findAll();
		require(dirname(__FILE__) . "/../views/contest/index.php");
	}
	
	function newAction() {		
		require(dirname(__FILE__) . "/../views/contest/new.php");
	}
	
	function createAction() {
		$contestModel = new ContestContests_Model_Contest();
		$contestModel->create($_POST);
		$item = $contestModel->getLast();
		$flashMessage = "Concurso criado com sucesso";
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function editAction() {
		$contestModel = new ContestContests_Model_Contest();
		$item = $contestModel->find($_GET["id"]);
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function updateAction() {
		$contestModel = new ContestContests_Model_Contest();
		$id = $_GET["id"];
		$contestModel->update($id, $_POST);
		$item = $contestModel->find($id);
		$flashMessage = "Concurso atualizado com sucesso";
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function usersAction() {
		$contestModel = new ContestContests_Model_Contest();
		$id = $_GET["id"];
		$contest = $contestModel->find($id);
		$items = $contestModel->getContestUsers($id);
		
		if ($_GET["view"] == "list") {
			require(dirname(__FILE__) . "/../views/contest/users_list.php");
		} else {
			require(dirname(__FILE__) . "/../views/contest/users.php");
		}
 	}
	
	function deleteAction() {
		$contestModel = new ContestContests_Model_Contest();
		$id = $_GET["id"];
		$contest = $contestModel->delete($id);
		$items = $contestModel->findAll();
		require(dirname(__FILE__) . "/../views/contest/index.php");
	}
	
	function showAction($id) {
		$contestModel = new ContestContests_Model_Contest();
		$contest = $contestModel->find($id);
		require(dirname(__FILE__) . "/../views/contest/_show.php");
	}
	
}
?>