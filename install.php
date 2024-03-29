<?php

class CulturalContest_Install {
	
	function install() {
		$this->createContestsTable();
		$this->createUsersTable();
	}
	
	function createTable($tableName, $sql) {
		global $wpdb;
		$tableName = $wpdb->prefix . $tableName;
		if($wpdb->get_var("show tables like '$tableName'") != $tableName) {
			require_once(ABSPATH . "wp-admin/includes/upgrade.php");
			$sql = "CREATE TABLE " . $tableName . $sql;
			dbDelta($sql);
		}
	}
	
	function createContestsTable() {
		$sql = " (
			id BIGINT NOT NULL AUTO_INCREMENT,
			name VARCHAR(255) NULL,
			description text NULL,
			show_name tinyint(1) NULL,
			show_email tinyint(1) NULL,
			show_address1 tinyint(1) NULL,
			show_address2 tinyint(1) NULL,
			show_address3 tinyint(1) NULL,
			show_address4 tinyint(1) NULL,
			show_zipcode tinyint(1) NULL,
			show_city tinyint(1) NULL,
			show_state tinyint(1) NULL,
			show_document tinyint(1) NULL,
			show_birthday tinyint(1) NULL,
			show_answer tinyint(1) NULL,
			created_at DATETIME NULL,
			UNIQUE KEY id (id)
		);";
		$this->createTable("contests", $sql);
	}
	
	function createUsersTable() {
		$sql = " (
			id BIGINT NOT NULL AUTO_INCREMENT,
			contest_id BIGINT NOT NULL,
			name VARCHAR(255) NULL,
			email VARCHAR(255) NULL,
			address1 VARCHAR(255) NULL,
			address2 VARCHAR(255) NULL,
			address3 VARCHAR(255) NULL,
			address4 VARCHAR(255) NULL,
			zipcode VARCHAR(255) NULL,
			city VARCHAR(255) NULL,
			state VARCHAR(255) NULL,
			document VARCHAR(255) NULL,
			birthday DATETIME NULL,
			answer text NULL,
			created_at DATETIME NULL,
			UNIQUE KEY id (id)
		);";
		$this->createTable("contest_users", $sql);
	}
}

?>