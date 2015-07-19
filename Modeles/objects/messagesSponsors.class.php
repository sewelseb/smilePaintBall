<?php
/**
* 
*/
class MessageSponsors 
{
	private $_id;
	private $_name;
	private $_mail;
	private $_message;

	public function getId()
	{
	return $this->_id;
	}
	public function getName()
	{
	return $this->_name;
	}
	public function getMail()
	{
	return $this->_mail;
	}
	public function getMessage()
	{
	return $this->_message;
	}

	public function setId($arg)
	{
	$this->_id=$arg;
	}
	public function setName($arg)
	{
	$this->_name=$arg;
	}
	public function setMail($arg)
	{
	$this->_mail=$arg;
	}
	public function setMessage($arg)
	{
	$this->_message=$arg;
	}

	public function hydrate($id, $name, $mail, $message)
	{
		if ($id!='null')
		{
			$this->setId($id);
		}
		
		$this->setName($name);
		$this->setMail($mail);
		$this->setMessage($message);

	}
	function __construct()
	{
		
	}

	public function saveInBdd($bdd)
	{
		$bdd->exec('INSERT INTO message_sponsors (name, mail, message) VALUES (\''.addslashes($this->getName()). '\', \'' .addslashes($this->getMail()). '\', \'' .addslashes($this->getMessage()). '\')');
		//echo 'INSERT INTO message_sponsors (name, mail, message) VALUES (\''.addslashes($this->getName()). '\', \'' .addslashes($this->getMail()). '\', \'' .addslashes($this->getMessage()). '\');';
		//var_dump($bdd->errorInfo());
	}
}


?>