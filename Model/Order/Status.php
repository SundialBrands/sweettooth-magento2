<?php

namespace Sweettooth\Rewards\Model\Order;

use Magento\Framework\App\ObjectManager;

class Status
{
    public function getList()
    {
        $objectManager = ObjectManager::getInstance();
        $orderStatusCollection = $objectManager->create('Magento\Sales\Model\ResourceModel\Status\Collection')->load();

        $statuses = array();
        foreach ($orderStatusCollection as $orderStatus) {
            $statuses[] = $orderStatus->getStatus();
        }
        
        return $statuses;
    }
}
