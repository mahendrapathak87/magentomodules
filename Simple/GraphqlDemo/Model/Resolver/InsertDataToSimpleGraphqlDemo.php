<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Simple\GraphqlDemo\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Config\Element\Field;
use Simple\GraphqlDemo\Model\GraphqlDemoModelFactory;

class InsertDataToSimpleGraphqlDemo implements ResolverInterface{
    
    /**
     * @var GraphqlDemoModelFactory
     */
    public $graphqlModelFactory; 
    
     /**
     * @param GraphqlDemoModelFactory $graphqlModelFactory
     */
    public function __construct(GraphqlDemoModelFactory $graphqlModelFactory){
        $this->graphqlModelFactory= $graphqlModelFactory;
    }
    
     /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value=null, array $args=null){
        if(isset($args['input'])){
            try{
                $demoFactory = $this->graphqlModelFactory->create();
                $demoFactory->setData($args['input'])->save();
                $data = $args['input'];
                return ['title' => $data['title'],'description' => $data['description']];
            }catch(Exception $e){
                
            }
        }else{
            return ['title' => '','description' => ''];
        }
        
        
    }
}