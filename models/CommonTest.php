<?php


namespace app\models;
use app\Database;

/**
 * Class CommonTest
 * @package app\models
 */
class CommonTest
{
    public Database $dbo;

    /**
     * @param $id
     * @return array
     */
    public static function getTestTableName($id)
    {
        $dbo = Database::$db;
        $result = $dbo->getDatasById('tests_title','id',$id);
        return $result;
    }

    /**
     * CommonTest constructor.
     */
    public function __construct()
    {
        $this->dbo = Database::$db;
    }

    /**
     * @param $id
     * @return array
     */
    public function getTestNameByIdFromController($id)
    {
        $result = $this->dbo->getDatasById('tests_title','id',$id);
        return $result;
    }

    /**
     * @param $nameTbl
     * @param $person_id
     * @param $area_id
     * @return array
     */
    public function getAllAnswers($nameTbl,$person_id,$area_id)
    {
        $sql = "SELECT * FROM $nameTbl WHERE person_id = :person_id AND area_id = :area_id";
        $result = $this->dbo->getDataBySqlString($sql,
            [
                ':person_id' => $person_id,
                ':area_id' => $area_id
            ]);
        return $result;
    }

    /**
     * @param $nameRow
     * @param $tblNameSources
     * @return array
     */
    public function getSources($nameRow, $tblNameSources)
    {
        $result = $this->dbo->getDatasById($tblNameSources,'number_question', $nameRow);
        return $result;

    }

    /**
     * @param $calculateId
     * @param $tblName
     * @return array
     */
    public function getAllRecommendation($calculateId,$tblName)
    {
        $result = $this->dbo->getDatasById($tblName,'id',$calculateId);
        return $result;
    }

}