<?php

namespace Sweettooth\Rewards\Api\Order;

/**
 * Order status interface
 * @api
 */
interface StatusInterface
{
    /**
     * Fetch a list of all order statuses
     * @return Sweettooth\Rewards\Api\Data\Order\StatusInterface[]
     */
    public function getList();
}
