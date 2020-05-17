<?php
  
namespace Simple\GraphqlDemo\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class GraphqlDemoModel extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Simple\GraphqlDemo\Model\ResourceModel\GraphqlDemoResourceModel');
    }
}