<?php

/*
  Document   : Demo
  Created on : Jul 3, 2014, 1:54:20 PM
  Author     : Harrison
  Description:
 */
?>
<?php
class Likipe_Demo_Model_Demo extends Mage_Core_Model_Abstract
{
    public function _construct() {
        parent::_construct();
        $this->_init('demo/demo');
    }
}
