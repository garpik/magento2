<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Quote\Model\Resource\Quote;

use Magento\Framework\Model\Resource\Db\AbstractDb;

/**
 * Quote resource model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Item extends AbstractDb
{
    /**
     * Main table and field initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('quote_item', 'item_id');
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $hasDataChanges = $object->hasDataChanges();
        $object->setIsOptionsSaved(false);

        $result = parent::save($object);

        if ($hasDataChanges && !$object->isOptionsSaved()) {
            $object->saveItemOptions();
        }
        return $result;
    }
}
