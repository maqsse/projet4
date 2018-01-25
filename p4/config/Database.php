<!-- classe qui permet la connexion à la base de données -->

<?php
class Database

	{
	private static $dbName = 'projetdebzmaqsse';
	private static $dbHost = 'projetdebzmaqsse.mysql.db';
	private static $dbUsername = 'projetdebzmaqsse';
	private static $dbUserPassword = 'Tremplin1';
	private static $bdd = null;
	public static

	function connect()
		{
		if (null == self::$bdd)
			{
			try
				{
				self::$bdd = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword, array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				));
				}

			catch(PDOException $e)
				{
				die($e->getMessage());
				}
			}

		return self::$bdd;
		}

	public static

	function disconnect()
		{
		self::$bdd = null;
		}

	public

	function getDbName()
		{
		return $this->dbName;
		}

	public

	function setDbName($dbName)
		{
		$this->dbName = $dbName;
		return $this;
		}

	public

	function getDbHost()
		{
		return $this->dbHost;
		}

	public

	function setDbHost($dbHost)
		{
		$this->dbHost = $dbHost;
		return $this;
		}

	public

	function getDbUsername()
		{
		return $this->dbUsername;
		}

	public

	function setDbUsername($dbUsername)
		{
		$this->dbUsername = $dbUsername;
		return $this;
		}

	public

	function getDbUserPassword()
		{
		return $this->dbUserPassword;
		}

	public

	function setDbUserPassword($dbUserPassword)
		{
		$this->dbUserPassword = $dbUserPassword;
		return $this;
		}

	static public

	function getBdd()
		{
		return self::$bdd;
		}

	public

	function setBdd($bdd)
		{
		$this->bdd = $bdd;
		return $this;
		}
	}

?>
