<?php 

namespace Sweettooth\Rewards\Block;

use \Magento\Framework\View\Element\Template as MagentoTemplate;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Framework\View\Element\Template\Context as TemplateContext;
use \Magento\Store\Model\ScopeInterface;
use \Magento\Framework\App\ObjectManager;

/**
 * Sweettooth Balance Block
 */
class Balance extends MagentoTemplate
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
     * Should we show the points balance?
     * @return bool
     */
    public function showPointsBalance()
    {
        $isPointsBalanceEnbaled = $this->scopeConfig->getValue('sweettooth-settings/display-settings/show-points-balance', ScopeInterface::SCOPE_STORE);
        return $isPointsBalanceEnbaled && $this->getCustomerSession()->isLoggedIn();
    }
}
