<?php
class User extends Mysql{
	public $username;
	public $password;
	public $email;
	public $group;
	public $createdTime;
	public $schoolid;
	public $schoolname;
	public $exteremail;
	public $exterweibo;
	public $exterblog;

	public function avatar() {
		return new Avatar($this->email);
	}
}

?>
