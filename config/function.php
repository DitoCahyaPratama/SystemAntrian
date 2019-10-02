<?php
	function _run($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		return $result;
	}
	function _get($query){
		$result = mysqli_fetch_array($query);
		return $result;
	}
	function _num($query){
		$result = mysqli_num_rows($query);
		return $result;
	}
	function _row($query){
		$result = mysqli_fetch_row($query);
		return $result;
	}
?>