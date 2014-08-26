<?php

/*
  Document   : IndexController
  Created on : Jul 3, 2014, 1:40:24 PM
  Author     : Harrison
  Description:
 */
?>
<?php
class Likipe_Demo_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}