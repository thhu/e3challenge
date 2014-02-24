<?php 
	/**
	 * 
	 */
	class DB {
		 
		var $mysqli = NULL; 
		
		function DB() {
			db_connect();
		}
		
		function db_connect(){
			$mysqli = new mysqli("example.com", "user", "password", "database");
			if ($mysqli->connect_errno) {
    			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
			}
			
			$query = "";
			// create database
			$query = "CREATE DATABASE trendabble_db";
		}
		
		function db_query($fields,$binds){
			db_validate::validate_fields($fields);
			$query = ""; 
			// binding part here
			// ... 
			
			$mysqli->query($query);
		}
		
		function db_disconnect(){
			$mysqli::close(); 	
		}
		
	}
	
?>