<?php

/*
  Document   : Collection
  Created on : Jul 3, 2014, 1:59:56 PM
  Author     : Harrison
  Description:
 */
?>
<?php
class Likipe_Demo_Model_Mysql4_Demo_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct() {
        //parent::_construct();
        $this->_init('demo/demo');
    }
}
