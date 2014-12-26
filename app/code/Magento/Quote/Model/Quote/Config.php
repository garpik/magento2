<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Quote\Model\Quote;

class Config
{
    /**
     * @var \Magento\Catalog\Model\Attribute\Config
     */
    private $_attributeConfig;

    /**
     * @param \Magento\Catalog\Model\Attribute\Config $attributeConfig
     */
    public function __construct(\Magento\Catalog\Model\Attribute\Config $attributeConfig)
    {
        $this->_attributeConfig = $attributeConfig;
    }

    /**
     * @return array
     */
    public function getProductAttributes()
    {
        return $this->_attributeConfig->getAttributeNames('quote_item');
    }
}
