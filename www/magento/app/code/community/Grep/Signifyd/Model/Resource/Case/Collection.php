<?php

class Grep_Signifyd_Model_Resource_Case_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {  
        $this->_init('grep_signifyd/case');
    }
}
