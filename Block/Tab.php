<?php 

namespace ST\Rewards\Block;

use \Magento\Framework\View\Element\Template as MagentoTemplate;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Framework\View\Element\Template\Context as TemplateContext;
use \Magento\Store\Model\ScopeInterface;
use \Magento\Framework\App\ObjectManager;

/**
 * Sweettooth Tab Block
 */
class Tab extends MagentoTemplate
{
    protected $scopeConfig;
    protected $customerSession;
    
    public function __construct(TemplateContext $context, ScopeConfigInterface $scopeConfig, array $data = [])
    {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }
    
    /**
     * Fetch the Customer Session
     * @return Magento\Customer\Model\Session
     */
    public function getCustomerSession()
    {
        if (!$this->customerSession) {
            $objectManager = ObjectManager::getInstance();
            $this->customerSession = $objectManager->get('Magento\Customer\Model\Session');
        }
        
        return $this->customerSession;
    }
    
    /**
     * Fetch the API endpoint
     * @return string
     */
    public function getSite()
    {
        return $this->scopeConfig->getValue('sweettooth-settings/api-settings/app-site', ScopeInterface::SCOPE_STORE);
    }
    
    /**
     * Fetch the public channel key
     * @return string
     */
    public function getChannelKey()
    {
        return $this->scopeConfig->getValue('sweettooth-settings/api-settings/public-key', ScopeInterface::SCOPE_STORE);
    }
    
    /**
     * Fetch the logged in customer id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->getCustomerSession()->getCustomerId();
    }
    
    /**
     * Generate the customer diggest
     * @return string
     */
    public function getDigest()
    {
        $secretKey = $this->scopeConfig->getValue('sweettooth-settings/api-settings/secret-key', ScopeInterface::SCOPE_STORE);
        $digest = $this->getCustomerId() . $secretKey;

        return md5($digest);
    }
}
