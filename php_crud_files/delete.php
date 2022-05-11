<?php
	if(ISSET($_GET['id'])){
		require_once 'connection.php';
		$id = $_GET['id'];
		$sql = $connection->prepare("DELETE from `person` WHERE `id`='$id'");
		$sql->execute();
		header('location:index.php');
	}
?>