<?php
class ContestContests_ContestController {
	
	function indexAction() {
		$contestModel = new ContestContests_ContestModel();
		$items = $contestModel->findAll();
		require(dirname(__FILE__) . "/../views/contest/index.php");
	}
	
	function newAction() {		
		require(dirname(__FILE__) . "/../views/contest/new.php");
	}
	
	function createAction() {
		$contestModel = new ContestContests_ContestModel();
		$contestModel->create($_POST);
		$item = $contestModel->getLast();
		$flashMessage = "Concurso criado com sucesso";
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function editAction() {
		$contestModel = new ContestContests_ContestModel();
		$item = $contestModel->find($_GET["id"]);
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function updateAction() {
		$contestModel = new ContestContests_ContestModel();
		$id = $_GET["id"];
		$contestModel->update($id, $_POST);
		$item = $contestModel->find($id);
		$flashMessage = "Concurso atualizado com sucesso";
		require(dirname(__FILE__) . "/../views/contest/edit.php");
	}
	
	function usersAction() {
		$contestModel = new ContestContests_ContestModel();
		$id = $_GET["id"];
		$contest = $contestModel->find($id);
		$items = $contestModel->getContestUsers($id);
		require(dirname(__FILE__) . "/../views/contest/users.php");
	}
	
	function deleteAction() {
		$contestModel = new ContestContests_ContestModel();
		$id = $_GET["id"];
		$contest = $contestModel->delete($id);
		$items = $contestModel->findAll();
		require(dirname(__FILE__) . "/../views/contest/index.php");
	}
	
}
?>