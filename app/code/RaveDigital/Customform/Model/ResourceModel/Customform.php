<?php

namespace RaveDigital\Customform\Model\ResourceModel;

class Customform extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ravedigital_customform', 'id');   //here "ravedigital_customform" is table name and "id" is the primary key of custom table
    }
}

