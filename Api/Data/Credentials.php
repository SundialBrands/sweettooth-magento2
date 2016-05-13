<?php

namespace Sweettooth\Rewards\Api\Data;

class Credentials extends \Magento\Framework\Api\AbstractSimpleObject
{
    /**#@+
     * Constants for Data Object keys
     */
    const PUBLIC_KEY = 'public_key';
    const SECRET_KEY = 'secrey_key';
    
    /**
     * Get public key
     * @return string
     */
    public function getPublicKey()
    {
        return $this->_get(self::PUBLIC_KEY);
    }

    /**
     * Get secret key
     * @return string
     */
    public function getSecretKey()
    {
        return $this->_get(self::SECRET_KEY);
    }
    
    /**
     * Set public key
     * @return $this
     */
    public function setPublicKey($publicKey)
    {
        return $this->setData(self::PUBLIC_KEY, $publicKey);
    }

    /**
     * Set secret key
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        return $this->setData(self::SECRET_KEY, $secretKey);
    }
}
