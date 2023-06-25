<?php
namespace M2M\DbExercise\Model\ResourceModel\DbExercise;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'M2M\DbExercise\Model\DbExercise', 
            'M2M\DbExercise\Model\ResourceModel\DbExercise'
        );
    }
}