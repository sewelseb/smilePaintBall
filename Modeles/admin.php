<?php
	require_once('connexionBDD.php');
	require_once('objects/admin.class.php');
	require_once('messagesSponsorsManager.class.php');

	$admin = new Admin();

	if($admin->boolConnexion())
	{
		$messagesSponsorsManager= new MessagesSponsorsManager();
	}
	else
	{
		header('location: index.php?page=adminConnexion');
	}


?>