<?php
	/**
	* 
	*/
	class Admin
	{
		private $_id;
		private $_pseudo;
		private $_password;

		public function getId()
		{
		return $this->_id;
		}
		public function getPseudo()
		{
		return $this->_pseudo;
		}
		public function getPassword()
		{
		return $this->_password;
		}

		public function setId($arg)
		{
		$this->_id=$arg;
		}
		public function setPseudo($arg)
		{
		$this->_pseudo=$arg;
		}
		public function setPassword($arg)
		{
		$this->_password=$arg;
		}

		public function hydrate($id, $pseudo, $password)
		{
			if ($id!='null')
			{
				$this->setId($id);
			}
		
			$this->setPseudo($pseudo);
			$this->setPassword($password);

		}
		function __construct()
		{
			
		}

		public function testConnexion($bdd)
		{
			$retour = false;
			$liste=$bdd->query('SELECT * FROM admin WHERE (pseudo=\''.$this->getPseudo().'\')');
			
			while ($item=$liste->fetch())
				{
					if($item['password']==$this->getPassword())
					{
						$retour= true;
						$clef=time();
						$_SESSION["clefAdmin"] = $clef;
						setcookie("clefAdmin",$clef,time()+(3600));
					}
					
				}
			return $retour;
		}

		public function boolConnexion()
		{
			$retour= false;
			if ($_SESSION['clefAdmin']==$_COOKIE['clefAdmin'])
			{
				$retour=true;
			}
			return $retour;
		}
	}


?>