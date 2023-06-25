<?php

namespace M2M\DbExercise\Model\Exercise;

use M2M\DbExercise\Model\DbExerciseFactory;
use M2M\DbExercise\Model\ResourceModel\DbExercise as DbExerciseResourceModel;
use M2M\DbExercise\Model\ResourceModel\DbExercise\CollectionFactory as DbExerciseCollection;

class DbExercise
{
    /**
    * @var DbExerciseFactory
    */
    protected $dbExerciseModel;

    /**
    * @var DbExerciseResourceModel
    */
    protected $dbExerciseResourceModel;

    /**
    * @var DbExerciseCollection
    */
    protected $dbExerciseCollection;

    public function __construct(
        DbExerciseFactory $dbExerciseModel,
        DbExerciseResourceModel $dbExerciseResourceModel,
        DbExerciseCollection $dbExerciseCollection
    ) {
        $this->dbExerciseModel = $dbExerciseModel;
        $this->dbExerciseResourceModel = $dbExerciseResourceModel;
        $this->dbExerciseCollection = $dbExerciseCollection;
    }

    public function addDataToDb()
    {
        $dbData = $this->dbExerciseModel->create();

        $exampleData = [
            "sku" => "myszka-razer-viper",
            "name" => "Myszka Razer Viper",
            "price" => "200",
            "custom_data" => "Opis myszki"
        ];

        $dbData->addData($exampleData);

        $this->dbExerciseResourceModel->save($dbData);
    }

    public function getDbCollection()
    {
        $collection = $this->dbExerciseCollection->create()->getData();
        var_dump($collection); die;
    }

}