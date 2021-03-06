<?php
/**
 * @author    Digia Commerce Oy
 * @copyright Copyright © 2018 Digia. All rights reserved.
 * @package   Digia_AvardaCheckout
 */
namespace Digia\AvardaCheckout\Model;

use Digia\AvardaCheckout\Api\Data\PaymentQueueInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Payment queue model
 */
class PaymentQueue extends AbstractModel implements PaymentQueueInterface
{
    /**
     * Initialize model
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(\Digia\AvardaCheckout\Model\ResourceModel\PaymentQueue::class);
    }

    /**
     * Purchase id
     *
     * @return string|null
     */
    public function getPurchaseId()
    {
        return $this->getData(self::PURCHASE_ID);
    }

    /**
     * Set purchase id
     *
     * @param string $purchaseId
     * @return $this
     */
    public function setPurchaseId($purchaseId)
    {
        $this->setData(self::PURCHASE_ID, $purchaseId);

        return $this;
    }

    /**
     * Quote id
     *
     * @return int|null
     */
    public function getQuoteId()
    {
        return $this->getData(self::QUOTE_ID);
    }

    /**
     * Set quote id
     *
     * @param int $quoteId
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        $this->setData(self::QUOTE_ID, $quoteId);

        return $this;
    }

    /**
     * Queue updated date
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set queue updated date
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);

        return $this;
    }
}
