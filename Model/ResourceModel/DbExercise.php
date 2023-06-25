<?php

namespace M2M\DbExercise\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DbExercise extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('m2m_db_exercise', 'id');
    }
}