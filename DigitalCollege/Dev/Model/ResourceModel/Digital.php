<?php
namespace DigitalCollege\Dev\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Digital extends AbstractDb
{
    public function _construct()
    {
        $this->_init('dc_dev', 'id');
        $this->_init('produtos_table', 'id');
    }
}