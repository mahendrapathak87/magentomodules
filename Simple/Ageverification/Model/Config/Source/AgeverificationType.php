<?php
/*
* source model for system configuration
*/
namespace Simple\Ageverification\Model\Config\Source;

class AgeverificationType implements \Magento\Framework\Option\ArrayInterface
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'with_confirmbutton' => 'Confirm button',
            'with_dob_verification' => 'Date of birth verification',
        ];
    }
}