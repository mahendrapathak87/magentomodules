<?php
  
namespace Simple\GraphqlDemo\Model\ResourceModel\GraphqlDemoResourceModel;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Simple\GraphqlDemo\Model\GraphqlDemoModel',
            'Simple\GraphqlDemo\Model\ResourceModel\GraphqlDemoResourceModel'
        );
    }
}