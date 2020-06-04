<?php
	function getresult($search){
		$connect = new mysqli('localhost','root','','resto');
		$list = array();
		$query = "SELECT `name`,`image`,`optionid`,`description`,`price` FROM `edible` WHERE `name` = ? ";
		$stmt = $connect->prepare($query);
		$stmt->bind_param("s",$search);
		$stmt->execute();
		$row = $stmt->get_result();
		while($user = $row->fetch_assoc()){
			$innerar = array();
			array_push($innerar, $user['name']);
		 	array_push($innerar, $user['description']);
		 	array_push($list,$innerar);
		}
		$stmt->close();
		$connect->close();
		return $list;
	}
?>