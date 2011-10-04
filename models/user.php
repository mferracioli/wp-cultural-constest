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
	
	function create($params) {	
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$contest_id = $wpdb->escape($params["contest_id"]);
		$name = $wpdb->escape($params["user_name"]);
		$email = $wpdb->escape($params["user_email"]);
		$address1 = $wpdb->escape($params["user_address1"]);
		$address2 = $wpdb->escape($params["user_address2"]);
		$address3 = $wpdb->escape($params["user_address3"]);
		$address4 = $wpdb->escape($params["user_address4"]);
		$zipcode = $wpdb->escape($params["user_zipcode"]);
		$city = $wpdb->escape($params["user_city"]);
		$state = $wpdb->escape($params["user_state"]);
		$document = $wpdb->escape($params["user_document"]);
		$birthday = $wpdb->escape($params["user_birthday"]);
		$birthday = date("Y-m-d", strtotime(str_replace("/", "-", $birthday)));
		$answer = $wpdb->escape($params["user_answer"]);
		$createdAt = date("Y-m-d");	
		$wpdb->query(" INSERT INTO $tableName (contest_id, name, email, address1, address2, address3, address4, zipcode, city, state, document, birthday, answer, created_at) VALUES ($contest_id, '$name', '$email', '$address1', '$address2', '$address3', '$address4', '$zipcode', '$city', '$state', '$document', '$birthday', '$answer', '$createdAt') ");
	}
	
	function getLast() {
		global $wpdb;
		$tableName = $wpdb->prefix . "contest_users";
		$items = $wpdb->get_results("SELECT * FROM $tableName ORDER BY id DESC LIMIT 1");
		return end($items);
	}
}
?>