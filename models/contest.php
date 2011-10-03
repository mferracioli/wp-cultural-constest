<?php
class ContestContests_Model_Contest {
	
	function findAll() {
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";
		$items = $wpdb->get_results("SELECT * FROM $tableName ORDER BY id DESC");
		return $items;
	}
	
	function find($id) {
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";
		$items = $wpdb->get_results("SELECT * FROM $tableName WHERE id = $id LIMIT 1");
		return end($items);
	}
	
	function getContestUsers($contestId) {
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$items = $wpdb->get_results("SELECT * FROM $tableName WHERE contest_id = $contestId");
		return $items;
	}
	
	function countContestUsers($contestId) {
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$items = $wpdb->get_results("SELECT COUNT(*) as c FROM $tableName WHERE contest_id = $contestId");
		return end($items)->c;
	}
	
	function create($params) {		
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";
		$name = $wpdb->escape($params["name"]);
		$description = $wpdb->escape($params["description"]);
		$createdAt = date("Y-m-d"); 
		$wpdb->query(" INSERT INTO $tableName (name, description, created_at) VALUES ('$name', '$description', '$createdAt') ");
	}
	
	function getLast() {
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";
		$items = $wpdb->get_results("SELECT * FROM $tableName ORDER BY id DESC LIMIT 1");
		return end($items);
	}
	
	function update($id, $params) {		
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";		
		$name = $wpdb->escape($params["name"]);
		$description = $wpdb->escape($params["description"]);
		$wpdb->query(" UPDATE $tableName SET name = '$name', description = '$description' WHERE id = $id ");
	}
	
	function delete($id) {		
		global $wpdb;
		$tableName = $wpdb->prefix . "contests";		
		$wpdb->query(" DELETE FROM $tableName WHERE id = $id ");
		$tableName = $wpdb->prefix . "contest_users";
		$wpdb->query(" DELETE FROM $tableName WHERE contest_id = $id ");
	}
}
?>