<?php
class ContestContests_Model_User {
	
	function findAll() {
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$items = $wpdb->get_results("SELECT * FROM $tableName ORDER BY id DESC");
		return $items;
	}
	
	function find($id) {
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$items = $wpdb->get_results("SELECT * FROM $tableName WHERE id = $id LIMIT 1");
		return end($items);
	}
}
?>