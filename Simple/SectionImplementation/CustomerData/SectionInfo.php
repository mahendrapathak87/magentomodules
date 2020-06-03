<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Simple\SectionImplementation\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;
use Magento\Framework\App\ObjectManager;

/**
 * Wishlist section
 */
class SectionInfo implements SectionSourceInterface
{
   

    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        return [
            'dummyinfo' => 'this is simple information 500',
        ];
    }

   
}
