<?php
namespace DigitalCollege\Dev\Model;

use Magento\Framework\Model\AbstractModel;

class Digital extends AbstractModel
{
    public function _construct()
    {
        $this->_init('DigitalCollege\Dev\Model\ResourceModel\Digital');
    }
}