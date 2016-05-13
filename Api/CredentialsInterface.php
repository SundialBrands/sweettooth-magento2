<?php

namespace Sweettooth\Rewards\Api;

/**
 * Sweet Tooth interface
 * @api
 */
interface CredentialsInterface
{
    /**
     * Fetch a list of all order statuses
     * @params Sweettooth\Rewards\Api\Data\Credentials
     * @return Sweettooth\Rewards\Api\Data\Credentials
     */
    public function saveCreds(\Sweettooth\Rewards\Api\Data\Credentials $credentials);
}
