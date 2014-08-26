<?php

/*
  Document   : Edit
  Created on : Aug 22, 2014, 1:51:48 PM
  Author     : Harrison
  Description:
 */
?>
<?php

class Likipe_Demo_Block_Adminhtml_Demo_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'demo';
        $this->_controller = 'adminhtml_demo';

        $this->_updateButton('save', 'label', Mage::helper('demo')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('demo')->__('Delete Item'));
    }

    public function getHeaderText()
    {
        if( Mage::registry('demo_data') && Mage::registry('demo_data')->getId() ) {
            return Mage::helper('demo')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('demo_data')->getTitle()));
        } else {
            return Mage::helper('demo')->__('Add Item');
        }
    }
}