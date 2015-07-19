<?php
	if(isset($_POST['pseudo']) && isset($_POST['mdp']))
	{
		require_once('connexionBDD.php');
		require_once('objects/admin.class.php');


		$admin= new Admin();
		$admin->hydrate('null', $_POST['pseudo'], $_POST['mdp']);
		if($admin->testConnexion($bdd))
		{
			header('location: index.php?page=admin');
		}

	}
	



?>