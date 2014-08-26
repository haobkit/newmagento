<?php

/*
  Document   : Demo
  Created on : Jul 3, 2014, 1:57:04 PM
  Author     : Harrison
  Description:
 */
?>
<?php
class Likipe_Demo_Model_Mysql4_Demo extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct() {
        $this->_init('demo/demo', 'demo_id');
    }
}
