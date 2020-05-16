<?php
/**
 * Copyright © GraphqlDemo, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Simple\GraphqlDemo\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Config\Element\Field;

class ModeldataQueryResolver implements ResolverInterface{
    
    public function resolve(Field $field, $context, ResolveInfo $info, array $value=null, array $args=null){
        return array('modelData' =>array('string1','string2'));
    }
}