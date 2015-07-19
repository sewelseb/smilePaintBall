<?php
	if($_POST['message']!='')
	{
		require_once('connexionBDD.php');
		require_once('objects/messagesSponsors.class.php');

		$messageSponsors= new MessageSponsors();
		$messageSponsors->hydrate('null', $_POST['name'], $_POST['mail'], $_POST['message']);
		//var_dump($messageSponsors);
		$messageSponsors->saveInBdd($bdd);
	}
	
	header('location: index.php');

?>