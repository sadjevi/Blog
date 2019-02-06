<?php

require_once ('Model/Connect.php');


class AdminManager extends connect
{
	public function logPass()
	{
		$db = $this->dbConnect();
	 	$req = $db->query('SELECT * FROM administration');
		$log = $req->fetch();

		return $log;
	}
}