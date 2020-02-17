<?php

namespace Alevel\HomeBooks\Block;


use Alevel\HomeBooks\Model\Book;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Front
 * @package Alevel\HomeBooks\Block
 */
class Front extends Template
{
    protected $book;

    public function __construct(Context $context, Book $book, array $data = [])
    {
        $this->book = $book;
        parent::__construct($context, $data);
    }

    public function getBooksCollection()
    {
        $count= $this->getCount();
        return $this->book->getCollection()->setPageSize($count);
    }

    public function getCount(){
       return $this->_scopeConfig->getValue('book/general/book_count', ScopeInterface::SCOPE_STORE);
    }
}