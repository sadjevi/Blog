<?php

require_once ('Model/DbManager.php');


class AdminManager extends DbManager
{
	public function logPass()
	{
		$db = $this->dbConnect();
	 	$req = $db->query('SELECT * FROM administration');
		$log = $req->fetch();

		return $log;
	}
}