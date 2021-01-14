<?php


namespace app\models;
use app\Database;

/**
 * Class Preview
 * @package app\models
 */

class Preview
{
    public Database $dbo;


    public function __construct()
    {
        $this->dbo = Database::$db;
    }

    /**
     * @return array
     * get area list
     */
    public function getAreas()
    {

        $result = $this->dbo->getData('area');
        return $result;
    }

    /**
     * @param $area
     * @return array
     * get school list by area id
     */

    public function getSchoolsById($area)
    {
        $result = $this->dbo->getDatasById('schools','area_id',$area);
        return $result;
    }

    /**
     * @return array
     * get position list
     */

    public function getAllPosition()
    {
        $result = $this->dbo->getData('position_title');
        return $result;
    }

    /**
     * @return array
     * get experience list
     */
    public function getExperience()
    {
        $result = $this->dbo->getData('experience');
        return $result;
    }

}