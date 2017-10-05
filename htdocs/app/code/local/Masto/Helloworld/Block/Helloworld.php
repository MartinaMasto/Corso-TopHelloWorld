<?php
/**
 * Hello World...*/

/**
 * Hello World Helper Data
 *
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 */
class Masto_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('masto_helloworld')->isEnabled();
    }

    /**
     * getMessage
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('masto_helloworld')->getConfig('configuration/message');
    }
}