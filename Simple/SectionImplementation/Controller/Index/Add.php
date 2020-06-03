<?php
/**
 * Copyright © add, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Simple\SectionImplementation\Controller\Index;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Add implements HttpPostActionInterface
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		//return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}