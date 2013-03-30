<?php 
class Application_Model_NewsLetter extends Zend_Db_Table_Abstract
{
	protected $_name = 'newsletter';

	public function saveNews($data)
	{
		$row = $this->createRow();
		foreach ($data as $key => $val) {
			$row->$key = $val;
		}
		$row->save();
	}

	public function isEmailExists($email)
	{
		$select = $this->select();// SELECT FROM newsletter where email = 'dfsfdsf';
		$select->where('email = ?', $email);
		$res = $this->fetchAll($select);
		if (count($res) > 0) {
			return true;
		}
		return false;
	}
}