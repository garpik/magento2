<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Quote\Model\Resource\Quote;

use Magento\Framework\Model\Resource\Db\AbstractDb;

/**
 * Quote payment resource model
 */
class Payment extends AbstractDb
{
    /**
     * Serializeable field: additional_information
     *
     * @var array
     */
    protected $_serializableFields = ['additional_information' => [null, []]];

    /**
     * @param \Magento\Framework\App\Resource $resource
     */
    public function __construct(
        \Magento\Framework\App\Resource $resource
    ) {
        parent::__construct($resource);
    }

    /**
     * Main table and field initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('quote_payment', 'payment_id');
    }
}
