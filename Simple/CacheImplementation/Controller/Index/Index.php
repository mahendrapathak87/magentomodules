<?php
/**
 * Copyright © GraphqlDemo, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Simple\CacheImplementation\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	/**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonResultFactory;
    
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $http;
    

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
         \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory,
        \Magento\Framework\App\Response\Http $http
		)
	{
		$this->jsonResultFactory = $jsonResultFactory;
        $this->http = $http;
		return parent::__construct($context);
	}

	public function execute()
	{
		$data = ['randomString' => $this->randomString()];
        $result = $this->jsonResultFactory->create();
        $result->setData($data);
        $this->http->setPrivateHeaders(30);
        return $result;
	}  
    
    private function randomString(){

    $characters = 'Mahendra'; 
    $randomString = ''; 
  
    for ($i = 0; $i < 10; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

    
}