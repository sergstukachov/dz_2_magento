<?php

namespace Alevel\HomeBooks\Setup;


use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $_bookFactory;

    public function __construct(\Alevel\HomeBooks\Model\BookFactory $bookFactory)
    {
        $this->_bookFactory = $bookFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.1', '<')) {
            $data = [
                'title' => "Robinson Crusoe",
                'author' => "Daniel Defoe",
                'genre' => "Roman",
                'year' => '1719',
];
            $book = $this->_bookFactory->create();
            $book->addData($data)->save();
        }
    }
}