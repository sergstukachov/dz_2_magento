<?php

namespace Alevel\HomeBooks\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Post
 * @package Alevel\HomeBooks\Model\ResourceModel
 */
class Book extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alevel_books_model', 'entity_id');
    }
}