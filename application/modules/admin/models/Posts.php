<?php

class Admin_Model_Posts extends Zend_Db_Table_Abstract 
{
    protected $_name = 'article';

    public function findAll($limit = false) {
        $select = $this->select();
        $select->order('createdAt ASC');
        if ($limit) {
            $select->limit($limit);
        }
        return ($res = $this->fetchAll($select)) ? $res->toArray() : false;
    }

    public function findDataById($id) {
        $select = $this->select();
        $select->where('id = ?', (int) $id);
        return ($res = $this->fetchAll($select)) ? $res->toArray() : false;
    }

}

