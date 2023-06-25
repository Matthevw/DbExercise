<?php

namespace M2M\DbExercise\Model;

use Magento\Framework\Model\AbstractModel;

class DbExercise extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('M2M\DbExercise\Model\ResourceModel\DbExercise');
    }
}