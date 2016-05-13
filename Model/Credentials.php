<?php

namespace Sweettooth\Rewards\Model;

class Credentials
{
    
    /**
     * @var \Magento\Config\Model\ResourceModel\Config
     */
    protected $_resourceConfig;
    
    /**
     * Constructor
     * @param \Magento\Config\Model\ResourceModel\Config $resourceConfig
     */
    public function __construct(\Magento\Config\Model\ResourceModel\Config $resourceConfig) 
    {
        $this->_resourceConfig = $resourceConfig;
    }
    
    public function saveCreds($credentials)
    {
        if (!$credentials->getPublicKey() || !$credentials->getSecretKey()) {
            throw new \Exception('Insufficient data.');
        }
        
        $this->_resourceConfig->saveConfig('sweettooth-settings/api-settings/public-key', $credentials->getPublicKey(), 'default', 0);
        $this->_resourceConfig->saveConfig('sweettooth-settings/api-settings/secret-key', $credentials->getSecretKey(), 'default', 0);
        
        return true;
    }
}
