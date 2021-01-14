<?php


namespace app\models;
use app\Database;

/**
 * Class School
 * @package app\models
 */

class School
{
    public Database $db;

    /**
     * School constructor.
     */
    public function __construct()
    {
        $this->db = Database::$db;
    }

    /**
     * @param $id
     * @return array
     */
    function getSchoolById($id)
    {
        $sql = "SELECT schools.id_school, schools.school_name, area.title_area FROM schools
            INNER JOIN area ON schools.area_id = area.id_area
            WHERE  schools.id_school = :id";
        $result = $this->db->getDataBySqlString($sql,[':id' => $id]);
        return $result;
    }

    /**
     * @param $id
     * @return array
     */
    public function getPositionById($id)
    {
       $result = $this->db->getDatasById('position_title','id_discipline',$id);
        return $result;

    }

}