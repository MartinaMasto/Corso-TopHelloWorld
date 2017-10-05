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
class Masto_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     * 
     * @param string $config
     * @return string
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('masto_helloworld/' . $config);
    }
    
    /**
     * isEnabled
     * 
     * Returns true ifi this module is enabled.
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }
}