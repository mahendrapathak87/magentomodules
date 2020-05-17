<?php
  
namespace Simple\GraphqlDemo\Model\ResourceModel;
  
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
  
class GraphqlDemoResourceModel extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('simple_graphqldemo', 'id');
    }
}